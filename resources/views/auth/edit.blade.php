@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('user.update', $user) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
        <div class="form-group">
            <label for="name">Nome utente:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="address">Indirizzo</label>
            <input type="address" class="form-control" id="address" name="address">
        </div>

        <div class="form-group">
            <label for="phone_number">Cellulare</label>
            <input type="phone_number" class="form-control" id="phone_number" name="phone_number">
        </div>
        
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection
