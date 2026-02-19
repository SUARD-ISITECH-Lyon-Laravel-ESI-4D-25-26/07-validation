<form method="POST" action="{{ route('products.store') }}">
    @csrf
    Name:
    <br />
    <input type="text" name="name" />
    <br />
    {{-- TÂCHE : affichez l'erreur de validation spécifique au champ "name" --}}
    {{-- en utilisant une seule directive Blade : pseudo-code ci-dessous --}}
    {{-- @directive --}}
    {{-- {{ $message }} --}}
    {{-- @endDirective --}}
    <br /><br />
    <button type="submit">Save</button>
</form>
