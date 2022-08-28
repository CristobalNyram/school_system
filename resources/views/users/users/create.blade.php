@extends('layouts.app')

@section('content')
    @include('layouts.navbars.navs.header')

    <div class="container-fluid mt--6">



        <div class="row">
          <div class="col">
            <div class="card">
              <!-- Card header -->

              <div class="card-header border-0">
                <h2 class="mb-0">Nuevo usuario</h2>

              </div>


                        <form class="m-5"  action="{{route('role_store')}}"  method="POST">
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
                            <label for="exampleFormControlInput1">Nombre</label>
                            <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Nombre de usuario"  max="50" required oninput="uppercaseLetters(event);">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Apellido de parterno</label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Apellido paterno de usuario"  max="50" required  oninput="uppercaseLetters(event);">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Apellido de materno</label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Apellido materno de usuario"  max="50"  required oninput="uppercaseLetters(event);">
                            </div>



                            <div class="form-group">
                                <label for="exampleFormControlInput1">Rol</label>

                                <select class="form-control form-control-lg  " data-toggle="select2"  >
                                    <option value="-1" selected>Seleccionar</option>
                                    @foreach ($rol_available as $rol )
                                    <option value="{{ $rol->id }}" >{{ $rol->name }}</option>

                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Genero</label>

                                <select class="form-control form-control-lg  " data-toggle="select2"  >
                                    <option value="-1" selected>Seleccionar</option>
                                    <option value="1" >Masculino</option>
                                    <option value="2" >Feminino</option>
                                    <option value="3" >No binario</option>


                                  </select>
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input  type="email" class="form-control form-control-lg" id="description" name="description" placeholder="Correo electronico del usuario." required maxlength="50">
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
