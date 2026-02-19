{{-- Formulaire sans design --}}

{{-- TÂCHE : affichez ici les erreurs de validation avec la structure HTML de votre choix --}}
{{-- Si name ou description est vide, le visiteur devrait voir : --}}
{{-- "The name field is required." et "The description field is required." --}}

<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    Title:
    <br />
    <input type="text" name="title" />
    <br /><br />
    Description:
    <br />
    <input type="text" name="description" />
    <br /><br />
    <button type="submit">Save</button>
</form>
