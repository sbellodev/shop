<h1>create shop[</h1>
<form action="{{ route('shops.store') }}" method="POST">
    @csrf
    <div>
        <label>name</label>
        <input type="text" name="nombre" id="nombre" required>
    </div>
    <button type="submit">create shop</button>
</form>