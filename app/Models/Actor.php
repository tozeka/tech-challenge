<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = ['name','bio','born_at'];

    public function movies()
    {
          return $this->belongsToMany(Movie::class)->using(Role::class);
    }

    public function roles()
    {
          return $this->HasMany(Role::class);
    }

    public function getNumberOfMoviesByGenre()
    {
       return  Genre::withCount(['movies' => function ($query) {
                $query->whereHas('actors', function($query){
                    $query->where('actor_id',$this->id);
                })->groupBy('genres');
        }])->get();
    }
}
