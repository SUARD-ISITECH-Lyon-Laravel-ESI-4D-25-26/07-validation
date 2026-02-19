<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            // TÂCHE : écrivez ici les règles de validation pour que le champ "title"
            //         soit obligatoire (required) et unique dans la table "posts"
            // Votre code ici
        );

        // Saving the post
        Post::create(['title' => $request->title]);

        return 'Success';
    }
}
