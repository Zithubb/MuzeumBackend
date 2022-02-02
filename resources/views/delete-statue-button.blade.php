
<form method="POST" action="{{ route('statues.destroy', $statue->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Törlés</button>
</form>