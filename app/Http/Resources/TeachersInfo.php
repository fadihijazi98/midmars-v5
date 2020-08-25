<?php

namespace App\Http\Resources;

use App\rating;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class TeachersInfo extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'image_path' => $this->image_path,
            'rating' => ($r = $this->determine_rating($this->id)) ? $r : 0,
            'plans' => $this->plansForSpecificTeacher($this->id)
        ];
    }

    public function plansForSpecificTeacher($teacher_id)
    {
        $plans = \App\plan::all()->where('user_id', $teacher_id);
        return plan::collection($plans);
    }

    public function determine_rating($teacher_id)
    {
        $ratings = rating::all()->where('teacher_id', $teacher_id);
        return collect($ratings)->average('rate');
    }
}
