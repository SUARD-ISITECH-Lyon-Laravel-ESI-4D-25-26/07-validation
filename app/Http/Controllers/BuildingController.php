<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBuildingRequest;
use App\Models\Building;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BuildingController extends Controller
{
    public function create()
    {
        return view('buildings.create');
    }

    // TÂCHE : personnalisez le message d'erreur de validation dans StoreBuildingRequest
    //         pour afficher "Please enter the name" à la place du message par défaut
    public function store(StoreBuildingRequest $request)
    {
        Building::create($validator->validated());

        return 'Success';
    }
}
