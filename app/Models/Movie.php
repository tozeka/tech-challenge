<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function actors()
    {
          return $this->belongsToMany(Actor::class)->using(Role::class);
    }

    public function roles()
    {
        return $this->hasMany(Role::class);
    }


    public function genres()
    {
          return $this->belongsToMany(Genre::class)->using(GenreMovie::class);
    }

    public function scopeOrderByReleaseDate($query)
    {
        return $query->orderBy('release_at','desc');
    }
}
