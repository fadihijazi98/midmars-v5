<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Topic extends JsonResource
{

    public function toArray($request)
    {
        return [
            'topic_id' => $this->id,
            'topic_name' => $this->name,
            'topic_state' => $this->state,
        ];
    }
}
