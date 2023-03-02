<h1>Shops</h1>

<ul>
    @foreach ($shops as $shop)
        <li>{{ $shop->nombre }}</li>
    @endforeach
</ul>