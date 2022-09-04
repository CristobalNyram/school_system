@extends('layouts.app')

@section('content')
@include('layouts.navbars.navs.header')

<div class="container-fluid mt--6">



    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->

                <div class="card-header border-0">
                    <h2 class="mb-0">Actualizar información del curso: {{ $current_course->name }}</h2>

                </div>


                <form class="m-5" action="{{route('course_edit')}}" method="POST" enctype="multipart/form-data">
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
                        <input type="hidden" name="id" id="id" value="{{$current_course->id}}">
                        <label for="title">Título</label>
                        <input type="text" class="form-control form-control-lg" id="title" name="title" value="{{    $current_course->title  }}" placeholder="Título del curso" max="50" required oninput="uppercaseLetters(event);">
                    </div>

                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control form-control-lg" id="description" name="description" value="{{ $current_course->description }}" placeholder="Apellido paterno de usuario" max="50" required oninput="uppercaseLetters(event);">
                    </div>
                    <div class="form-group">
                        <label for="date">fecha del curso</label>
                        <input type="date" class="form-control form-control-lg" id="date" name="date" value="{{ $current_course->date }}" placeholder="Fecha del curso" max="50" required >
                    </div>

                    <div class="form-group">
                        <label for="url_img">Foto del Curso</label>
                        <input type="file" onBlur='LimitAttach(this,1)' ;  accept="image/png, image/jpg, image/jpeg" class="form-control form-control-lg" id="url_img" name="url_img" value="{{ $current_course->url_img }}" placeholder="Foto del curso" max="50" required>
                    </div>

                    <div class="alert alert-warning alert-dismissible fade show" id="alerta" role="alert" style="display: none"  role="alert">
                        <span class="alert-inner--text"><strong>Advertencia: </strong> Sólo se aceptan archivos con extensiones .jpeg, .jpe, .jpg, .png</span>
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
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
                            @foreach ($users_speakers as $user_speaker )
                            <option value="{{ $user_speaker->id }}">{{ $user_speaker->name }}</option>

                            @endforeach
                        </select>
                    </div>

                    <div class="form-group justify-content-center align-items-center">
                        <label>Foto Actual</label>
                        <div class="form-group">
                            <img src="{{asset($current_course->url_img )}}" alt="{{$current_course->name}}" class="img-fluid img-thumbnail" width="600px">
                        </div>
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
<script src="/assets/js/validations/generalFunctions.js"></script>

<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
