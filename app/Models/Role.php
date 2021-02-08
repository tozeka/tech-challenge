<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Role extends Pivot
{
   
    public $incrementing = true;
    
    protected $table = 'actor_movie';

    public function movie()
    {
        return $this->BelongsTo(Movie::class);
    }

    public function actor()
    {
        return $this->belongsTo(Actor::class);
    }
}
