@extends('layouts.app')

@section('title', 'Services')

@section('content')
<h1>Servicios</h1>

<section class="grid">
    <x-card
        city="París"
        image="https://images.unsplash.com/photo-1502602898657-3e91760cbb34"
        price="450€"
        days="4"
        description="Escapada romántica con visita a la Torre Eiffel."
        link="https://www.paris.fr"
    />

    <x-card
        city="Roma"
        image="https://images.unsplash.com/photo-1529260830199-42c24126f198"
        price="390€"
        days="3"
        description="Viaje cultural por el Coliseo, Vaticano y centro histórico."
        link="https://www.turismoroma.it"
    />

    <x-card
        city="Londres"
        image="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad"
        price="520€"
        days="5"
        description="Ruta urbana por museos, mercados y monumentos."
        link="https://www.visitlondon.com"
    />
</section>
@endsection