@extends('layouts.main')

@php
    $products = config('products');
@endphp


@section('content')
    <div class="container">

        @forelse ($products as $product)
            <div class="product">
                <div class="img-product">
                    <img src="/img/{{ $product['frontImage'] }}" alt="" class="imgdefault">
                    <img src="/img/{{ $product['backImage'] }}" alt="" class="imghover">
                    <span class="{{ $product['isInFavorites'] ? 'active' : '' }} heart">&hearts;</span>
                    <div class="target">
                        @foreach ($product['badges'] as $badge)
                            <span class="{{ $badge['type'] }}">{{ $badge['value'] }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="description">
                    <span>{{ $product['brand'] }}</span>
                    <h3><strong>{{ $product['name'] }}</strong></h3>
                </div>
                <div class="price">
                    <span class="discounted">{{ $product['price'] }} &euro;</span>
                    <span class="original">{{ $product['price'] }} &euro;</span>
                </div>
            </div>
        @empty
            <h1>Non ci sono prodotti</h1>
        @endforelse
    </div>
@endsection
