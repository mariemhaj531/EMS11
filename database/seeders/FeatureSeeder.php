<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::create([
            'icone' => 'fas fa-lightbulb',
            'titre' => 'Innovation',
            'description' => 'Nous apportons des solutions novatrices adaptées à vos besoins.'
        ]);
        
        Feature::create([
            'icone' => 'fa-solid fa-globe',
            'titre' => 'Digital',
            'description' => 'Transformez votre présence en ligne et boostez votre visibilité.'
        ]);
        
        Feature::create([
            'icone' => 'fa-solid fa-arrow-up-right-dots',
            'titre' => 'Croissance',
            'description' => 'Notre expertise vous aide à atteindre vos objectifs d\'affaires.'
        ]);
        
    }
}
