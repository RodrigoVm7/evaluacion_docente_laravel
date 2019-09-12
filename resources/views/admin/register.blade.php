@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
<<<<<<< HEAD
                    <form method="POST" action="{{url('/admin/insertar')}}">
                        @csrf


=======

                    <!-- Seccion que mediante el método POST, recepciona los datos de un nuevo usuario a registrar.
                     Posteriormente, una vez recepcionados, se redirige a la url ('admin/insertar')-->
                    <form method="POST" action="{{url('/admin/insertar')}}">
                        @csrf

                        <!-- Cuadro que permitirá recibir el Rut-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                        <div class="form-group row">
                            <label for="rut" class="col-md-4 col-form-label text-md-right">{{ __('Rut') }}</label>

                            <div class="col-md-6">
                                <input id="rut" type="text" class="form-control @error('rut') is-invalid @enderror" name="rut" value="{{ old('rut') }}" required autocomplete="rut" autofocus>
<<<<<<< HEAD

=======
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                                @error('rut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<<<<<<< HEAD


=======
                        <!-- Cuadro que permitirá recibir el Nombre-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
<<<<<<< HEAD

=======
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<<<<<<< HEAD
=======
                        <!-- Cuadro que permitirá recibir el correo electrónico-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
<<<<<<< HEAD

=======
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<<<<<<< HEAD
=======
                        <!-- Cuadro que permitirá recibir la contraseña-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
<<<<<<< HEAD

=======
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<<<<<<< HEAD
=======
                        <!-- Cuadro que permitirá recibir nuevamente la contraseña-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        
<<<<<<< HEAD

                        <div class="form-group row">
                            <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>

                            <!-- <div class="col-md-6">
                                <select class="form-control" id="tipo" name="tipo" style="padding: .375rem .75rem">
                                    <option value=""> </option>
                                    <option value="student">Estudiante</option>
                                    <option value="profesor">Profesor</option>
                                </select>
                            </div> -->

=======
                        <!-- Cuadro que permitirá recibir el tipo de usuario a registrar-->
                        <div class="form-group row">
                            <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>

>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                            <div class="col-md-6">
                                <select id="tipo" type="text" class="form-control @error('tipo') is-invalid @enderror" name="tipo" required autocomplete="tipo" autofocus>
                                    <option value=""> </option>
                                    <option value="student">Estudiante</option>
                                    <option value="profesor">Profesor</option>
                                </select>
<<<<<<< HEAD

=======
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                                @error('tipo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
<<<<<<< HEAD
                                    {{ __('Registrar') }}
                                </button>
                                <a class="btn btn-primary" href="{{ url('admin/index') }}">Regresar</a>
=======
                                    {{ __('Registrar 📥 ') }}
                                </button>
                                <a class="btn btn-primary" href="{{ url('admin/index') }}">Regresar ←</a>
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
