<?php


namespace App\Models\Traits;

use Illuminate\Support\Str;

trait PrimaryAsUuid
{
    public static function bootPrimaryAsUuid()
    {
        static::creating(function ($model) {
            $model->id = Str::uuid()->toString();
        });
        static::saving(function ($model) {
            $model->id = $model->getOriginal('id');
        });
    }
}
