<?php

use App\Models\Series;
use App\Models\Video;
use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Series::class, 20)->create()->each(function ($s) {
            $episodes = random_int(0, 10);
            for ($x = 0; $x < $episodes; $x++) {
                $s->videos()->save(factory(Video::class)->make([
                    'episode' => ($x + 1),
                    'like' => random_int(0, 1000),
                    'series_id' => $s->id,
                ]));
            }
        });
    }
}
