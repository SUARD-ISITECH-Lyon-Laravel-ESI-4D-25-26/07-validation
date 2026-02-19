<form method="POST" action="{{ route('buildings.store') }}">
    @csrf
    Name:
    <br />
    <input type="text" name="name" />
    <br />
    {{-- TÂCHE : personnalisez le message d'erreur de validation pour afficher "Please enter the name" --}}
    @error('name') {{ $message }} @enderror
    <br /><br />
    <button type="submit">Save</button>
</form>
