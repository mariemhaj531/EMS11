<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Realisation;

class RealisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Realisation::create(['image' => 'realisations/Réalisation1.jpg']);
        Realisation::create(['image' => 'realisations/Réalisation2.jpg']);
        Realisation::create(['image' => 'realisations/Réalisation3.jpg']);

    }
}
