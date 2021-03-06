@extends('layouts.app')

@section('content')
    <style>

        /* Add a hover effect if you want */
        .fa:hover {
            opacity: 0.3;
        }

        /* Set a specific color for each brand */

        /* Facebook */
        .fa-facebook {
            /*background: #3B5998;*/
            color: white;
        }
    </style>
    <div class="">
        <div class="row">
            <div style="margin-top: 15px" class="border-top-4 col-md-4 col-sm-12 justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Inicio de sesion como ') }}<strong>alumno</strong></div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('employee.login','1') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                                    <div class="col-md-6">
                                        <input id="correo" type="email" class="form-control @error('correo') is-invalid @enderror" name="correo" value="{{ old('correo') }}" required autocomplete="correo" autofocus>

                                        @error('correo')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Iniciar sesion') }}
                                        </button>

                                    </div>

                                </div>
                            </form>
                            <br>
                            <div class="row text-center">
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <a href="{{ route('employee.redirectfacebook',encrypt(1)) }}" class="btn btn-primary btn-block" style="margin-top: 2px"><i class="fa fa-facebook"></i> Inicio sesion con Facebook</a>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <a href="{{ route('employee.redirectgmail',encrypt(1)) }}" class="btn btn-primary btn-block" style="margin-top: 2px; background-color: #dd4b39;border-color: rgb(221, 75, 57);"><i class="fa fa-google"></i> Inicio sesion con Gmail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 15px" class="border-top-4 col-md-4 col-sm-12 justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Inicio de sesion como') }} <strong>tutor</strong> </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('employee.login',2) }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                                    <div class="col-md-6">
                                        <input id="correo" type="email" class="form-control @error('correo') is-invalid @enderror" name="correo" value="{{ old('correo') }}" required autocomplete="correo" autofocus>

                                        @error('correo')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Iniciar sesion') }}
                                        </button>

                                    </div>

                                </div>
                            </form>
                            <br>
                            <div class="row text-center">
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <a href="{{ route('employee.redirectfacebook',encrypt(2)) }}" class="btn btn-primary btn-block" style="margin-top: 2px"><i class="fa fa-facebook"></i> Inicio sesion con Facebook</a>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <a href="{{ route('employee.redirectgmail',encrypt(2)) }}" class="btn btn-primary btn-block" style="margin-top: 2px; background-color: #dd4b39;border-color: rgb(221, 75, 57);"><i class="fa fa-google"></i> Inicio sesion con Gmail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 15px" class="border-top-4 col-md-4 col-sm-12 justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Inicio de sesion como ') }}<strong>docente</strong></div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('employee.login',3) }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                                    <div class="col-md-6">
                                        <input id="correo" type="email" class="form-control @error('correo') is-invalid @enderror" name="correo" value="{{ old('correo') }}" required autocomplete="correo" autofocus>

                                        @error('correo')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Iniciar sesion') }}
                                        </button>

                                    </div>

                                </div>
                            </form>
                            <br>
                            <div class="row text-center">
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <a href="{{ route('employee.redirectfacebook',encrypt(3)) }}" class="btn btn-primary btn-block" style="margin-top: 2px"><i class="fa fa-facebook"></i> Inicio sesion con Facebook</a>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <a href="{{ route('employee.redirectgmail',encrypt(3)) }}" class="btn btn-primary btn-block" style="margin-top: 2px; background-color: #dd4b39;border-color: rgb(221, 75, 57);"><i class="fa fa-google"></i> Inicio sesion con Gmail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
