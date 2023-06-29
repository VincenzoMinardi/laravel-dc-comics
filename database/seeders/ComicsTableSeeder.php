<?php

namespace Database\Seeders;

use App\Models\comic;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (config('comics') as $comic) {
            // creare la riga nel database
            comic::create($comic);
        }
    }
}
