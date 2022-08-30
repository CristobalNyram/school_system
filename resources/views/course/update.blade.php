@extends('layouts.app')

@section('content')
    @include('layouts.navbars.navs.header')

    <div class="container-fluid mt--6">



        <div class="row">
          <div class="col">
            <div class="card">
              <!-- Card header -->

              <div class="card-header border-0">
                <h2 class="mb-0">Actualizar información del curso: {{ $current_course->title }}</h2>

              </div>


                        <form class="m-5"  action="{{route('course_store')}}"  method="POST">
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
                            <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{    $current_course->title  }}" placeholder="Nombre de usuario"  max="50" required oninput="uppercaseLetters(event);">
                            </div>

                            <div class="form-group">
                                <label for="first_surname">Descripción</label>
                                <input type="text" class="form-control form-control-lg" id="first_surname" name="first_surname" value="{{ $current_course->description }}" placeholder="Apellido paterno de usuario"  max="50" required  oninput="uppercaseLetters(event);">
                            </div>
                            <div class="form-group">
                                <label for="second_surname">fecha del curso</label>
                                <input type="text" class="form-control form-control-lg" id="second_surname" name="second_surname" value="{{ $current_course->date }}" placeholder="Apellido materno de usuario"  max="50"  required oninput="uppercaseLetters(event);">
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
