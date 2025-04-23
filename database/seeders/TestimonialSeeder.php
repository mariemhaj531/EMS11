<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
            'nom' => 'Jean Dupont',
            'poste' => 'Directeur Marketing',
            'message' => 'Une expérience incroyable! Service rapide et professionnel. Je suis ravi!',
            'photo' => 'testimonials/cl1.jpg'
        ]);
        
        Testimonial::create([
            'nom' => 'Daniel Martin',
            'poste' => 'Directeur de Projet',
            'message' => 'Un service exceptionnel, je suis ravi de l’impact que cela a eu sur notre entreprise!',
            'photo' => 'testimonials/cl2.jpg'
        ]);
        
        Testimonial::create([
            'nom' => 'Marie Durand',
            'poste' => 'Chef d’entreprise',
            'message' => 'Nous avons eu une expérience incroyable avec cette équipe! Très professionnel!',
            'photo' => 'testimonials/cl3.jpg'
        ]);
        
    }
}
