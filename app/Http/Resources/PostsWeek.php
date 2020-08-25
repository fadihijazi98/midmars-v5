<?php

namespace App\Http\Resources;

use App\rating;
use App\topic;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class PostsWeek extends JsonResource
{

    public function toArray($request)
    {
        return [
            'data' => [
                'post_id' => $this->id,
                'post_title' => $this->title,
                'post_content' => $this->content,
                'post_seen' => $this->seen,
                'post_topic_follow' => $this->getTopicById($this->topic_id),
                'last_update' => $this->updated_at->diffForHumans(),
                'created_at' => $this->created_at->diffForHumans(),
            ],
            'link' => [
                'self' => $this->url(),
            ]
        ];
    }

    public function getTopicById($topic_id) {
        return (topic::where('id', $topic_id)->pluck('name'))[0];
    }
}
