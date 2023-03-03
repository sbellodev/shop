@extends('layouts.app')

<div class="container mt-2">
    <h3>Edit Shop</h3>
    <form method="POST" action="{{ route('shops.update', $shop->id) }}">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" class="form-control w-auto" value="{{ old('nombre', $shop->nombre) }}">
        <br>
        <button type="submit" class="btn btn-primary mt-2">Update Shop</button>
    </form>
</div>