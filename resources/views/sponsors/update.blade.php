@extends('layouts.app')

@section('content')
@include('layouts.navbars.navs.header')

<div class="container-fluid mt--6">



    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->

                <div class="card-header border-0">
                    <h2 class="mb-0">Actualizar información del sponsor: {{ $current_sponsor->name }}</h2>
                </div>


                <form class="m-5" action="{{route('sponsor_edit')}}" method="POST">
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
                        <input type="hidden" name="id" id="id" value="{{$current_sponsor->id}}">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{$current_sponsor->name  }}" placeholder="Título del sponsor" max="50" required oninput="uppercaseLetters(event);">
                    </div>

                    <div class="form-group">
                        <label for="slogan">Descripción</label>
                        <input type="text" class="form-control form-control-lg" id="slogan" name="slogan" value="{{ $current_sponsor->slogan }}" placeholder="Slogann" max="50" required oninput="uppercaseLetters(event);">
                    </div>
                    

                    <div class="form-group">
                        <label for="url_img">Foto del Patrocinador</label>
                        <input type="text" class="form-control form-control-lg" id="url_img" name="url_img" value="{{ $current_sponsor->url_img }}" placeholder="Foto del sponsor" max="50" required oninput="uppercaseLetters(event);">
                    </div>

                    <div class="row  mt-5 d-flex justify-content-center">
                        <div class="col-lg-4 col-12">
                            <a href="{{  url()->previous()  }}" type="button" class="btn btn-danger">Cancelar</a>

                        </div>
                        <div class="form-group row d-flex justify-content-center">
                            <button type="submit" class="btn btn-default">Actualizar</button>

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