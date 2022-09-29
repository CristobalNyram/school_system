@extends('layouts.app', ['title' => __('User Profile')])

@section('content')

    @include('users.partials.header', [
        'title' => __('¡Hola') . ' '.auth()->user()->name.' '.auth()->user()->first_surname.' !',
        'class' => 'col-lg-12'
    ])


  <div class="container-fluid mt--7">
        <div class="row">
            @if(Auth::user()->role_id==4 ||Auth::user()->role_id==5 ||Auth::user()->role_id==6)
                    <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                        <div class="card card-profile shadow">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 order-lg-2">
                                    <div class="card-profile-image">
                                        <a href="#">
                                            <img src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg" class="rounded-circle">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                                <div class="d-flex justify-content-between">
                                    {{-- <a href="#" class="btn btn-sm btn-info mr-4">{{ __('Connect') }}</a>
                                    <a href="#" class="btn btn-sm btn-default float-right">{{ __('Message') }}</a> --}}
                                </div>
                            </div>
                            <div class="card-body pt-0 pt-md-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                            <div>
                                                <span class="heading">Semmi Sennior</span>
                                                <span class="description">{{ __('Paquete') }}</span>
                                            </div>
                                            {{-- <div>
                                                <span class="heading">10</span>
                                                <span class="description">{{ __('Photos') }}</span>
                                            </div> --}}
                                            <div>
                                                <span class="heading">Base de datos</span>
                                                <span class="description">{{ __('Curso inscrito') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h3>
                                        {{ auth()->user()->name }}  {{ auth()->user()->first_surname }}
                                        {{-- <span class="font-weight-light">, 27</span> --}}
                                    </h3>
                                    <div class="h5 font-weight-300">
                                        <i class="ni location_pin mr-2"></i>{{ __('Cuatrimestre 5to.') }}

                                        <i class="ni location_pin mr-2"></i>{{ __('Grupo A') }}
                                    </div>
                                    <div class="h5 mt-4">
                                        <i class="ni business_briefcase-24 mr-2"></i>{{ __('TSU EN DESARROLLO DE NEGOCIOS') }}
                                    </div>
                                    {{-- <div>
                                        <i class="ni education_hat mr-2"></i>{{ __('University of Computer Science') }}
                                    </div> --}}
                                    {{-- <hr class="my-4" />
                                    <p>{{ __('Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music.') }}</p>
                                    <a href="#">{{ __('Show more') }}</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
            @endif
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Editar perfil') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Información personal') }}</h6>

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                                    <input type="text" name="name" oninput="uppercaseLetters(event);" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus oninput="uppercaseLetters(event);">

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('first_surname') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Apellido paterno') }}</label>
                                    <input type="text" name="first_surname" id="input-first_surname" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Apellido paterno') }}" value="{{ old('first_surname', auth()->user()->first_surname) }}" required autofocus oninput="uppercaseLetters(event);">

                                    @if ($errors->has('first_surname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('first_surname') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('second_surname') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Apellido materno') }}</label>
                                    <input type="text" name="second_surname" id="input-second_surname" class="form-control form-control-alternative{{ $errors->has('second_surname') ? ' is-invalid' : '' }}" placeholder="{{ __('Apellido materno') }}" value="{{ old('second_surname', auth()->user()->second_surname) }}" required autofocus oninput="uppercaseLetters(event);">

                                    @if ($errors->has('second_surname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('second_surname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Dirección') }}</label>
                                    <input type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="{{ __('Dirección') }}" value="{{ old('address', auth()->user()->address) }}" required autofocus>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('curp') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('CURP') }}</label>
                                    <input type="text" maxlength="20" name="curp" id="input-curp" class="form-control form-control-alternative{{ $errors->has('curp') ? ' is-invalid' : '' }}" placeholder="{{ __('CURP') }}" value="{{ old('curp', auth()->user()->curp) }}" required>

                                    @if ($errors->has('curp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('curp') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('phone_number') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Número de télefono') }}</label>
                                    <input type="number" name="phone_number" id="input-phone_number" oninput="" class="form-control form-control-alternative{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" placeholder="{{ __('Número de télefono') }}" value="{{ old('phone_number', auth()->user()->phone_number) }}" required>

                                    @if ($errors->has('phone_number'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group{{ $errors->has('blood_type') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Tipo de sangre') }}</label>
                                    <input type="text" name="blood_type" id="input-blood_type" class="form-control form-control-alternative{{ $errors->has('blood_type') ? ' is-invalid' : '' }}" placeholder="{{ __('Tipo de sangre') }}" value="{{ old('blood_type', auth()->user()->blood_type) }}" required>

                                    @if ($errors->has('blood_type'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('blood_type') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                @switch(Auth::user()->role_id)

                                        @case(4)
                                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-email">{{ __('Carrera') }}</label>
                                                        <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-email">{{ __('Cuatrimestre') }}</label>
                                                        <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-email">{{ __('Grupo') }}</label>
                                                        <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>



                                            @break



                                        @case(6)

                                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-email">{{ __('Grado académico') }}</label>
                                                        <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-email">{{ __('Descripción') }}</label>
                                                        <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-email">{{ __('Especialidad') }}</label>
                                                        <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>


                                            @break



                                        @default



                                    @endswitch




                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Correo electronico') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>





                                @if ( check_acces_to_this_permission(Auth::user()->role_id,40))

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Actualizar información') }}</button>
                                </div>
                                @endif
                            </div>
                        </form>
                        <hr class="my-4" />
                        @if ( check_acces_to_this_permission(Auth::user()->role_id,39))

                        <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Contraseña') }}</h6>

                            @if (session('password_status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('password_status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-current-password">{{ __('Contraseña actual') }}</label>
                                    <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Contraseña actual') }}" value="" required>

                                    @if ($errors->has('old_password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('old_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Nueva contraseña') }}</label>
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Nueva contraseña') }}" value="" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Confirmar contraseña') }}</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('confirma la nueva contraseña') }}" value="" required>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Cambiar contraseña') }}</button>
                                </div>
                            </div>
                        </form>
                        @endif

                    </div>
                </div>
            </div>
        </div>



        @include('layouts.footers.auth')



    </div>
@endsection

@push('js')
    <script src="/assets/js/validations/generalFunctions.js"></script>
    <link rel="stylesheet" href="/assets/vendor/select2/dist/css/select2.min.css">
    <script src="/assets/vendor/select2/dist/js/select2.min.js" defer></script>

@endpush
