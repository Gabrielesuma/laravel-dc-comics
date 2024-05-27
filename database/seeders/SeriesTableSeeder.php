<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Serie;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $series = config('comics.series');
        foreach($series as $serie){
            $new_serie = new Serie();
            $new_serie->title = $serie['title'];
            $new_serie->description = $serie['description'];
            $new_serie->image = $serie['thumb'];
            $new_serie->price = $serie['price'];
            $new_serie->serie = $serie['series'];
            $new_serie->sale_date = $serie['sale_date'];
            $new_serie->type = $serie['type'];
            $new_serie->save();
        }
    }
}
