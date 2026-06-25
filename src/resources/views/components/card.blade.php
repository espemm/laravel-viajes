<article class="card">
    <img src="{{ $image }}" alt="Imagen de {{ $city }}">
    <h3>{{ $city }}</h3>
    <p><strong>Precio:</strong> {{ $price }}</p>
    <p><strong>Duración:</strong> {{ $days }} días</p>
    <p>{{ $description }}</p>
    <a href="{{ $link }}" target="_blank">Ver más</a>
</article>