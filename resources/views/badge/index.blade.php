@extends('layouts.app')

@section('content')
@include('layouts.navbars.navs.header')


<div class="container-fluid mt--6">
    <div class="row d-flex mb-3 mr-5 justify-content-end">
        @if ( check_acces_to_this_permission(Auth::user()->role_id,33))

        <a href="{{ route('gafet_pdf') }}" type="button" class="btn btn-info">Descargar Gafet</a>
        @endif

        <!-- <button id="boton" onclick="mostrar();" class="btn btn-info">Generar Frase Descriptiva</button> -->

    </div>

    <div class="card">


        <div class="card-body pt-2">
            <div class="gafet">
                <img id="bloque" src="{{ asset('assets/img/home/img/gafet') }}/ci_4.png">
                <img id="ri2" src="{{ asset('assets/img/home/img/gafet') }}/ri_2.png">
                <img id="logo" src="{{ asset('assets/img/home/img/gafet') }}/freedom.png">
                <img id="perfil" src="{{asset(old('user_image', auth()->user()->user_image)) }}">
                <img id="ri3" src="{{ asset('assets/img/home/img/gafet') }}/ri_3.png">
                <img id="ri4" src="{{ asset('assets/img/home/img/gafet') }}/ri_4.png">

                <h1 id="nombre">{{ old('name', auth()->user()->name) }}</h1>
                <h2 id="apellidos">{{ old('first_surname', auth()->user()->first_surname) }} {{ old('second_surname', auth()->user()->second_surname) }}</h2>
                @foreach($consulta as $rol)
                <h3 id="roles">{{$rol->name}}</h3>
                @endforeach
                <h4 id="CODERS">CODERSTI</h4>
                <h4 id="frase">#HAZLODIFERENTE</h4>

                <!-- <div class="texto" id="texto">
                    <label id="Frase1">"El no querer es la causa, el no poder el pretexto"</label>
                    <label id="Frase2">"El ordenador nació para resolver problemas que antes no existían"</label>
                    <label id="Frase3">"El optimismo es un riesgo laboral de la programación; el feedback es el tratamiento"</label>
                    <label id="Frase4">"No temo a los ordenadores; lo que temo es quedarme sin ellos"</label>
                    <label id="Frase5">"Los ordenadores son buenos siguiendo instrucciones, no leyendo tu mente"</label>
                    <label id="Frase6">"Antes de que un software sea reutilizable debería ser utilizable"</label>
                    <label id="Frase7">"Una vez un ordenador me venció jugando al ajedrez, pero no me opuso resistencia cuando pasamos al kick boxing"</label>
                </div> -->

            </div>




        </div>
    </div>




    @include('layouts.footers.auth')
</div>




<script>
    $(document).ready(function() {
        $('#table_users_all').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No encontramos nada.",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros existentes.",
                "infoFiltered": "(Fitrado de _MAX_  registros existentes)",
                "loadingRecords": "Cargando...",
                "search": "Buscar:",
                "emptyTable": "No hay información disponible en la tabla.",
                "paginate": {
                    "first": "First",
                    "last": "Last",
                    "next": "Next",
                    "previous": "Previous"
                },
            }
        });
    });
</script>

@endsection

@push('js')
{{-- <script src="{{ asset() }}/vendor/datatables.net/js/jquery.dataTables.min.js"></script> --}}



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script type="text/javascript">
    var contador = 0;
    var contador1 = 0;
    var contador2 =0;
        function mostrar(){    
            
            
        }
    

    
</script>

@endpush