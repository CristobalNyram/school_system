@extends('layouts.app')

@section('content')
    @include('layouts.navbars.navs.header')

    <div class="container-fluid mt--6">



        <div class="row">
          <div class="col">
            <div class="card">
              <!-- Card header -->

              <div class="card-header border-0">
                <h2 class="mb-0">Nuevo Estudiante</h2>

              </div>


                        <form class="m-5"  action="{{route('student_store')}}"  method="POST">
                            @csrf
                            @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                <strong>{{ session('success') }}</strong>
                            </div>
                            @endif
                            @if ($errors->any())

                                        @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger" role="alert">
                                            <strong> {{ $error }}</strong>
                                        </div>

                                        @endforeach
                           @endif
                            <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{   old('name') }}" placeholder="Nombre de estudiante"  max="50" required oninput="uppercaseLetters(event);">
                            </div>

                            <div class="form-group">
                                <label for="first_surname">Apellido de parterno</label>
                                <input type="text" class="form-control form-control-lg" id="first_surname" name="first_surname" value="{{ old('first_surname') }}" placeholder="Apellido paterno de estudiante"  max="50" required  oninput="uppercaseLetters(event);">
                            </div>
                            <div class="form-group">
                                <label for="second_surname">Apellido de materno</label>
                                <input type="text" class="form-control form-control-lg" id="second_surname" name="second_surname" value="{{ old('second_surname') }}" placeholder="Apellido materno de estudiante"  max="50"  required oninput="uppercaseLetters(event);">
                            </div>

                            <div class="form-group">
                                <label for="role_id"></label>
                                <input type="hidden" class="form-control form-control-lg" id="role_id" name="role_id" value="3" placeholder="Rol del estudiante"  max="50"  required oninput="uppercaseLetters(event);">
                            </div>



                            
                            <div class="form-group">
                                <label for="gender">Genero</label>

                                <select class="form-control form-control-lg  " data-toggle="select2" id="gender" name="gender" >
                                    <option value="-1" selected>Seleccionar</option>
                                    <option value="H" >Masculino</option>
                                    <option value="M" >Feminino</option>
                                    <option value="N/A" >No binario</option>


                                  </select>
                            </div>

                            <div class="form-group">
                                <label for="speaker_id">Carrera</label>

                                <select class="form-control form-control-lg  " data-toggle="select2"  name="speaker_id" id="speaker_id" >
                                    <option value="-2" selected>Seleccionar</option>
                                    @foreach ($carrers_available as $carrer_available )
                                    <option value="{{ $carrers_available }}" >{{ $carrer_available->name }}</option>

                                    @endforeach
                                  </select>
                            </div>


                            <div class="form-group">
                                <label for="email">Correo electronico</label>
                                <input  type="email" class="form-control form-control-lg" id="email" name="email" value=" {{ old('email') }}" placeholder="Correo electronico del usuario." required maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input  type="password" class="form-control form-control-lg" id="password" value="{{ old('password') }}" name="password" placeholder="Contraseña para este usuario." required maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirmar contraseña</label>
                                <input  type="password" class="form-control form-control-lg" id=" password_confirmation" name="password_confirmation" placeholder="Confirmar la contraseña para este usuario." required maxlength="50">
                            </div>





                            <div class="row  mt-5 d-flex justify-content-center">
                                <div class="col-lg-4 col-12">
                                    <a href="{{  url()->previous()  }}" type="button" class="btn btn-danger">Cancelar</a>

                                </div>
                                <div class="form-group row d-flex justify-content-center">
                                    <button type="submit" class="btn btn-default">Agregar</button>

                                </div>
                            </div>



                        </form>




            </div>
          </div>
        </div>


        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
