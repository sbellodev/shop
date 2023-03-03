@extends('layouts.app')

<div class="container mt-2">
    <h3>{{ $shop->nombre }}</h3>
    <p>{{ $shop->desc }}</p>
    <h2>Products:</h2>

    <ul>
        <!-- @foreach ($shop->products as $product)
            <li>{{ $product->nombre }}</li>
        @endforeach -->
    </ul>
</div>
