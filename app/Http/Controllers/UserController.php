<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function update(User $user, UpdateUserRequest $request)
    {
        // TÂCHE : modifiez cette ligne pour empêcher la mise à jour du champ is_admin
        // Utilisez uniquement les champs validés par UpdateUserRequest (sans is_admin)
        // Indice : utilisez $request->validated() plutôt que $request->all()
        $user->update($request->all());

        return 'Success';
    }
}
