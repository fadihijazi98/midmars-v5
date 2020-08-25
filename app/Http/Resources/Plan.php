<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Plan extends JsonResource
{

    public function toArray($request)
    {
        return [
            'data' => [
                'plan_id' => $this->id,
                'plan_name' => $this->name,
                'plan_description' => $this->description,
            ],
            'links' => [
                'self' => $this->url(),
            ],
        ];
    }
}
