@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
        <div class="form-group">
            <label for="name">Nome prodotto:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="price">Prezzo:</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" min="0">
        </div>

        <div class="form-group">
            <textarea name="description" id="description" cols="50" rows="10" placeholder="Descrizione prodotto"></textarea>
        </div>
        
        Seleziona una categoria: 
        <div class="form-group form-check">
            <select name="category" id="category">
                @foreach($categories as $category)
                    <option name="category" id="category" value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection
