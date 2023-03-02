<form action="{{ route('shops.destroy', $shop->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" >Delete</button>
</form>
