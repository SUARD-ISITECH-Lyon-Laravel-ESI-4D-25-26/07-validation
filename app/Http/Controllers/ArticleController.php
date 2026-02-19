<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Rules\Uppercase;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            // TÂCHE : créez votre propre règle de validation appelée Uppercase
            // Elle doit vérifier que la première lettre du title est une majuscule
            // Indice : utilisez `php artisan make:rule Uppercase` pour générer la règle
            'title' => ['required', new Uppercase()]
        ]);

        Article::create(['title' => $request->title]);
    }
}
