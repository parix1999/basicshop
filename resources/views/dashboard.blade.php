@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="content-initial card-header">
                    <div>
                        <h1>{{ __('Dashboard') }}</h1>
                        <div>Benvenuto <strong>{{ $user->name }}</strong></div>
                    </div>
                    <div class="image-container">
                        @if($user->picture != null)
                        <img src="{{ asset('storage/' . $user->picture) }}" alt="foto profilo">
                        @else
                        <img src="storage/image/users/avatar.png" alt="predefinita">
                        @endif
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    <h2>Gestisci i tuoi dati:</h2>
                    
                    <div class="dati-utente mt-2 mb-2">
                        <button class="btn btn-dark">Modifica i dati utente</button>
                    </div>
                    <div class="aggiunta mb-2">
                        <a href="{{ route('product.create') }}">
                            <button class="btn btn-dark">Aggiungi un prodotto</button>
                        </a>
                    </div>
                    <div class="lista-prodotti">
                        <a href="{{ route('product.index') }}">
                            <button class="btn btn-dark">Vedi lista prodotti</button>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
