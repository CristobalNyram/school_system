@extends('layouts.app')

@section('content')
    @include('layouts.navbars.navs.header')

    <div class="container-fluid mt--6">



        <div class="row">
          <div class="col">
            <div class="card">
              <!-- Card header -->

              <div class="card-header border-0">
                <h2 class="mb-0">Nueva Conferencia</h2>

              </div>


                        <form class="m-5"  action="{{route('talk_store')}}"  method="POST">
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
                            <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{   old('name') }}" placeholder="Nombre de la conferencia"  max="50" required oninput="uppercaseLetters(event);">
                            </div>

                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <input type="text" class="form-control form-control-lg" id="description" name="description" value="{{ old('description') }}" placeholder="Apellido paterno de usuario"  max="50" required  oninput="uppercaseLetters(event);">
                            </div>
                            <div class="form-group">
                                <label for="date">Fecha de la conferencia</label>
                                <input type="text" class="form-control form-control-lg" id="date" name="date" value="{{ old('date') }}" placeholder="Fecha de la conferencia"  max="50"  required oninput="uppercaseLetters(event);">
                            </div>

                            <div class="form-group">
                                <label for="time">Hora de la conferencia</label>
                                <input type="text" class="form-control form-control-lg" id="time" name="time" value="{{ old('time') }}" placeholder="Hora de la conferencia"  max="50"  required oninput="uppercaseLetters(event);">
                            </div>

                            <div class="form-group">
                                <label for="url_img">Foto de la conferencia</label>
                                <input type="text" class="form-control form-control-lg" id="url_img" name="url_img" value="{{ old('url_img') }}" placeholder="Foto de la conferencia"  max="50"  required oninput="uppercaseLetters(event);">
                            </div>

                            <div class="form-group">
                                <label for="speaker_id">ID del ponente</label>
                                <input type="text" class="form-control form-control-lg" id="speaker_id" name="speaker_id" value="{{ old('speaker_id') }}" placeholder="id del ponente"  max="50"  required oninput="uppercaseLetters(event);">
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
