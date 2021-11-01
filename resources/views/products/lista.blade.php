@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content-lista">
        <div class="row">
            @foreach($queryLista as $prodotto)
                <div class="mt-2 col-6 col-sm-6 col-md-4 col-lg-4">
                    <div>
                        <a href="{{ route('products.editImg', $prodotto->id) }}">Modifica immagine</a>
                        <div class="img-box">
                            <img src="{{ asset('storage/' . $prodotto->picture) }}" alt="foto prodotto">
                        </div>
        
                        <div class="description mt-3">
                            {{ $prodotto->description }}
                        </div>
        
                        <div class="price mt-3">
                            {{ $prodotto->price }} €
                        </div>
        
                        <a href="{{ route('product.edit', $prodotto->id) }}" class="mt-3">
                            <button class="btn btn-primary">Modifica</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection