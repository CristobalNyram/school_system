@extends('layouts.app')

@section('content')
@include('layouts.navbars.navs.header')

<div class="container-fluid mt--6">



    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->

                <div class="card-header border-0">
                    <h2 class="mb-0">Agregar Curso</h2>

                </div>


                <form class="m-5" action="{{route('course_store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if ($errors->any())

                                @foreach ($errors->all() as $error)


                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $error }}                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                @endforeach
                   @endif
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" class="form-control form-control-lg" id="title" name="title" value="{{   old('title') }}" placeholder="Título del curso" max="50" required oninput="uppercaseLetters(event);">
                    </div>

                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control form-control-lg" id="description" name="description" value="{{ old('description') }}" placeholder="Descripción" max="50" required oninput="uppercaseLetters(event);">
                    </div>
                    <div class="form-group">
                        <label for="maximum_person">Límite de personas</label>
                        <input type="text" class="form-control form-control-lg" id="maximum_person" name="maximum_person" value="{{ old('maximum_person') }}" placeholder="Límite de personas" max="50" required oninput="uppercaseLetters(event);">
                    </div>
                    <div class="form-group">
                        <label for="date">date</label>
                        <input type="text" class="form-control form-control-lg" id="date" name="date" value="{{ old('date') }}" placeholder="Fecha del curso" max="50" required oninput="uppercaseLetters(event);">
                    </div>

                    <div class="form-group">
                        <label for="url_img">Foto</label>
                        <input type="file" onBlur='LimitAttach(this,1)' ; accept="image/*" class="form-control form-control-lg" id="url_img" name="url_img" value="{{ old('url_img') }}" placeholder="Foto del curso" max="50" required oninput="uppercaseLetters(event);">
                    </div>

                    <div class="alert alert-warning" id="alerta" role="alert" style="display: none">
                        <span class="alert-inner--text"><strong>Advertencia: </strong> Sólo se aceptan archivos con extensiones .jpeg, .jpe, .jpg, .png</span>
                    </div>

                    <script type="text/javascript">
                        function LimitAttach(tField, iType) {
                            file = tField.value;
                            if (iType == 1) {
                                extArray = new Array(".jpeg", ".jpe", ".jpg", ".png");
                            }
                            allowSubmit = false;
                            if (!file) return;
                            while (file.indexOf("\\") != -1) file = file.slice(file.indexOf("\\") + 1);
                            ext = file.slice(file.indexOf(".")).toLowerCase();
                            for (var i = 0; i < extArray.length; i++) {
                                if (extArray[i] == ext) {
                                    allowSubmit = true;
                                    document.getElementById('alerta').style.display = "none";
                                    break;
                                }
                            }
                            if (allowSubmit) {} else {
                                tField.value = "";
                                document.getElementById('alerta').style.display = "block";
                            }
                        }
                    </script>

                    <div class="form-group">
                        <label for="speaker_id">ID del Ponente</label>

                        <select class="form-control form-control-lg  " data-toggle="select2" name="speaker_id" id="speaker_id">
                            <option value="-2" selected>Seleccionar</option>
                            @foreach ($users_speakers as $user )
                            <option value="{{ $user->id }}">{{ $user->name }}</option>

                            @endforeach
                        </select>
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
