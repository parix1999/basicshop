@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
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
                @foreach($allCategories as $category)
                    <option name="category" id="category" value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <div>
                <label
                    for="filePic"
                    class="text-md-right"
                >Seleziona un'immagine</label>
                <input
                    id="filePic"
                    type="file"
                    class="form-control @error('pictureFile') is-invalid @enderror"
                    name="filePic"
                    required
                    autocomplete="filePic"
                    autofocus
                />
                @error('pictureFile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection
