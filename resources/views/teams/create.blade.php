<form method="POST" action="{{ route('teams.store') }}">
    @csrf
    Name:
    <br />
    {{-- TÂCHE : modifiez ce champ pour qu'il conserve l'ancienne valeur après une erreur de validation --}}
    <input type="text" name="name" />
    <br /><br />
    <button type="submit">Save</button>
</form>
