<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// TÂCHE : personnalisez le message d'erreur de validation pour que le champ "name"
//         affiche "Please enter the name" à la place du message par défaut
class StoreBuildingRequest extends FormRequest
{
    protected $redirectRoute = 'buildings.create';

    /**
     * Vérifie si l'utilisateur est autorisé à effectuer cette requête.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Retourne les règles de validation applicables à cette requête.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required'
        ];
    }
}
