@extends('layouts.app') @section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
            <div class="row">
                <div class="col">
                    <h1 class="font-header title-form">Carica la nuova foto del prodotto</h1>
                    <form
                        method="POST"
                        action="{{ route('users.updateImg', $user) }}"
                        enctype="multipart/form-data"
                    >
                        @csrf @method('PUT')

                        <div>
                            <div class="">
                                <label
                                    for="filePic"
                                    class="text-md-right"
                                ></label>
                                <input
                                    id="filePic"
                                    type="file"
                                    class="form-control @error('filePic') is-invalid @enderror"
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

                        <div class="container">
                            <div class="row py-2">
                                <div class="col">
                                    <button
                                        type="submit"
                                        class="btn btn-dark"
                                    >
                                        Modifica
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection