<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Models\Item;

class ItemController extends Controller
{
    // TÂCHE : générez la classe StoreItemRequest avec la commande artisan
    //   `php artisan make:request StoreItemRequest`
    //   La méthode authorize() doit retourner true
    //   Les règles de validation : name est obligatoire (required), description est obligatoire (required)
    public function store(StoreItemRequest $request)
    {
        Item::create($request->validated());

        return 'Success';
    }

}
