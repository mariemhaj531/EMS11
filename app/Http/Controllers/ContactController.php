<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        //Enregistrement des données dans la base
        Contact::create($request->only('name', 'email', 'message'));
        
        // Afficher le message de succès
        return redirect()->back()->with('contact_success', 'Votre message a bien été envoyé !');
    }
}
