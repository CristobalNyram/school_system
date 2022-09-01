@extends('layouts.app')

@section('content')
    @include('layouts.navbars.navs.header')

    <div class="container-fluid mt--6">



        <div class="row">
          <div class="col">
            <div class="card">
              <!-- Card header -->


              <div class="card-header border-0">
                <h2 class="mb-0">Agregar Sponsor</h2>

              </div>


                        <form class="m-5"  action="{{route('sponsor_store')}}"  method="POST" enctype ="multipart/form-data">
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
                            <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{   old('title') }}" placeholder="Nombre del patrocinador"  max="50" required oninput="uppercaseLetters(event);">
                            </div>
                       

                            <div class="form-group">
                                <label for="slogan">Eslogon</label>
                                <input type="description" class="form-control form-control-lg" id="slogan" name="slogan" value="{{ old('slogan') }}" placeholder="Eslogan"  max="50" required  oninput="uppercaseLetters(event);">
                            </div>

                            

                            <div class="form-group">
                                <label for="url_img">Imagen</label>
                                <input type="file" class="form-control form-control-lg" id="url_img" name="url_img" value="{{ old('url_img') }}" placeholder="Foto del sponsor"  max="50"  required oninput="uppercaseLetters(event);" >
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
