@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(session('message'))
        </div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <div class="card">
        <div class="card-header">Configuración de mi cuenta</div>

        <div class="card-body">
            <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data" aria-label="Configuración de mi cuenta">
                @csrf

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('surname') }}</label>

                    <div class="col-md-6">
                        <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ Auth::user()->surname }}" required autocomplete="surname" autofocus>

                        @error('surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nickname" class="col-md-4 col-form-label text-md-end">{{ __('nickname') }}</label>

                    <div class="col-md-6">
                        <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ Auth::user()->nickname }}" required autocomplete="nickname" autofocus>

                        @error('nickname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    @if(Auth::user()->image)
                    <img src="{{ route('user.avatar', ['filename'=>Auth::user()->image]) }}" class="avatar" />

                    @endif
                </div>

                <div class="row mb-3">
                    <label for="image_path" class="col-md-4 col-form-label text-md-end">{{ __('Avatar') }}</label>

                    <div class="col-md-6">
                        <input id="image_path" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path">

                        @error('image_path')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Guardar cambios
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>


@endsection