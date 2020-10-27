<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    private $genres = [
        'action',
        'drama',
        'horror',
        'comedy',
    ];

    public function run()
    {
        foreach ($this->genres as $genre) {
            DB::table('genres')->insert(
                factory(\App\Models\Genre::class)->make([
                    'name' => $genre,
                ])->toArray()
            );
        }
    }
}
