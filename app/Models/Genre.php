<?php

namespace App\Models;

use App\Models\Traits\PrimaryAsUuid;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use PrimaryAsUuid;

    public $incrementing = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = ['name'];

     public function movies()
    {
          return $this->belongsToMany(Movie::class)->using(GenreMovie::class);
    }

    
    
}
