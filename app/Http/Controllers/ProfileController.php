<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            // TÂCHE : imaginez que le formulaire Blade contient des champs de type tableau :
            // <input name="profile[name]" ... />
            // <input name="profile[email]" ... />
            // Écrivez les règles de validation pour que name et email soient tous les deux obligatoires (required)
            // Votre code ici
        ]);

        auth()->user()->update($request->profile ?? []);

        return 'Success';
    }
}
