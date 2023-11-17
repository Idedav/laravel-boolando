@extends('layouts.main')

@php
    $products = config('products');
@endphp

@section('content')
    <div class="container">

        <h1><strong>Area Utente:</strong></h1>
        <div class="container">
            <div class="dc-container">
                <h3>Nome: {{ $name }}</h3>
                <h3>Cognome: {{ $lastname }}</h3>
                <h3>Email: {{ $email }}</h3>
                <h3>Indirizzo di spedizione: {{ $adress }}</h3>
            </div>
        </div>
    </div>
@endsection
