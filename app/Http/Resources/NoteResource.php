<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => 'Title: '.$this->title,
            'content' => $this->content,
            'Example' => 'This is an example'
        ];
    }
}
