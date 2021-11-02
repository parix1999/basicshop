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

                        <div class="bottoni">
                            <div>
                                <a href="{{ route('product.edit', $prodotto->id) }}" class="mt-3">
                                    <button class="btn btn-primary">Modifica</button>
                                </a>
                            </div>
                            
                            <button type="button" class="btn btn-danger ml-5" data-toggle="modal" data-target="#exampleModal">
                                Elimina
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Sei sicuro di voler eliminare l'inserzione? 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form action="{{ route('product.destroy', $prodotto->id) }}" method="POST">
                                            @csrf @method('DELETE')
                                                <a href="">
                                                    <button type="submit" class="btn btn-danger ml-5">Elimina</button>
                                                </a>
                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div>
                                <form action="{{ route('product.destroy', $prodotto->id) }}" method="POST">
                                @csrf @method('DELETE')
                                    <a href="">
                                        <button type="submit" class="btn btn-danger ml-5">Elimina</button>
                                    </a>
    
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection