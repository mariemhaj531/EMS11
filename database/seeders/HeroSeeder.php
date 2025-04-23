<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Hero::create([
            'titre' => 'Bienvenu chez EMS',
            'description' => 'Nous offrons des services professionnels adaptés à vos besoins spécifiques.',
            'bouton_texte' => 'Découvrez nos services',
            'bouton_lien' => '/services'
        ]);
    }
}
