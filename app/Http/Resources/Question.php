<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Question extends JsonResource
{

    public function toArray($request)
    {
        return [
            'question_id' => $this->id,
            'question_name' => $this->name,
            'question_level' => $this->level,
            'question_url' => $this->url,
            'question_last_update' => $this->updated_at->diffForHumans(),
            'question_created_at' => $this->created_at,
        ];
    }
}
