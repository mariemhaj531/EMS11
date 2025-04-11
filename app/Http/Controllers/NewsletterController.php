<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validation de l'email
        $validated = $request->validate([
            'email' => 'required|email|unique:subscribers,email', // Assure-toi que la table "subscribers" existe dans ta DB
        ]);

        // Sauvegarder l'email (ajoute une table 'subscribers' dans la base de données)
        \DB::table('subscribers')->insert([
            'email' => $request->email,
            'created_at' => now(),
        ]);

        return back()->with('success', 'Merci de vous être abonné à notre newsletter !');
    }
}
