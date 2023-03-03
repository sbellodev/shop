@extends('layouts.app')

<div class="container mt-2">
<h3>List shop</h3>
    <table class="table table-bordered table-striped text-center align-middle w-auto">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Nº Productos</th>
                <th>Info</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shops as $shop)
            <tr>
                <td class="align-middle">{{ $shop->id }}</td>
                <td class="align-middle">{{ $shop->nombre }}</td>
                <td class="align-middle">{{ $shop->products->count() }}</td>
                <td class="align-middle">
                    <form action="{{ route('shops.showShop', $shop->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">Info</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('shops.edit', $shop->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('shops.delete', $shop->id) }}" method="DELETE">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Create shop</h3>
    <form action="{{ route('shops.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Name</label>
            <input type="text" class="form-control w-auto" name="nombre" id="nombre" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Create</button>
    </form>
</div>
