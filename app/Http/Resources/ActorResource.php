<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ActorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'bio' => $this->bio,
            'born_at' => $this->born_at,
            'number_movies_by_genre' => $this->getNumberOfMoviesByGenre()
            
        ];

        
    }
}
