<!-- resources/views/shop.blade.php -->

<h1>Shops</h1>

<ul>
    @foreach ($shops as $shop)
        <li>{{ $shop->name }}</li>
    @endforeach
</ul>