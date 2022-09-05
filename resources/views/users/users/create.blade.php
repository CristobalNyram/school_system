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


                        <form class="m-5"  action="{{route('user_store')}}"  method="POST">
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
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{   old('name') }}" placeholder="Nombre de usuario"  max="50" required oninput="uppercaseLetters(event);">
                            </div>

                            <div class="form-group">
                                <label for="first_surname">Apellido de parterno</label>
                                <input type="text" class="form-control form-control-lg" id="first_surname" name="first_surname" value="{{ old('first_surname') }}" placeholder="Apellido paterno de usuario"  max="50" required  oninput="uppercaseLetters(event);">
                            </div>
                            <div class="form-group">
                                <label for="second_surname">Apellido de materno</label>
                                <input type="text" class="form-control form-control-lg" id="second_surname" name="second_surname" value="{{ old('second_surname') }}" placeholder="Apellido materno de usuario"  max="50"  required oninput="uppercaseLetters(event);">
                            </div>



                            <label for="name">Rol</label>
                            <div class="form-group">
                                <div class="select" id="select">
                                    <div class="contenido-select">

                                        <label class="titulo">Seleccione un rol</label>
                                    </div>
                                    <i class="fas fa-angle-down"></i>
                                </div>

                                <div class="opciones" id="opciones">
                                    @foreach ($rol_available as $rol )
                                    <a href="#" class="opcion">
                                        <div class="contenido-opcion">
                                            <img src="" alt="image_rol">
                                            <div class="textos">
                                                <h1 class="titulo">{{ $rol->name }}</h1>
                                                <p class="descripcion">{{ $rol->name }}</p>
                                            </div>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="gender">Genero</label>

                                <select class="form-control form-control-lg  single-select-2  " data-toggle="select2" id="gender" name="gender" >
                                    <option value="-1" selected>Seleccionar</option>
                                    <option value="H" >Masculino</option>
                                    <option value="M" >Feminino</option>
                                    <option value="N/A" >No binario</option>


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

    <style>
        .contenedor {
	width: 90%;
	max-width: 100%;
	margin: auto;
	/* padding: 40px 0; */
}


.select {
	background: #fff;

	width: 100%;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, .16);
	border-radius: 10px;
	cursor: pointer;
	display: flex;
	justify-content: space-between;
	align-items: center;
	transition: .2s ease all;
	/* margin-bottom: 30px; */
	padding-top:.8rem;
    padding-left:.9rem;
    padding-right: .6rem;
	position: relative;
	z-index: 200;
	border: 2px solid transparent;
    border: 2px solid #CAD1D7;

}

.select.active,
.select:hover {
	box-shadow: 0px 5px 10px rgba(0, 0, 0, .16);
	border: 2px solid #3aaa35;
}

.select.active:before {
	content: "";
	display: block;
	height: 0;
	width: 0;
	border-top: 15px solid #3aaa35;
	border-right: 15px solid transparent;
	border-bottom: 15px solid transparent;
	border-left: 15px solid transparent;
	position: absolute;
	bottom: -30px;
	left: calc(50% - 15px);
}

.select i {
	font-size: 30px;
	margin-left: 30px;
	color: #213f8f;
}

.titulo {
	margin-bottom: 10px;
	color: #B6BDC4;
	/* font-weight: 600; */
	font-size: inherit;
}

.descripcion {
	font-size: 18px;
	color: #434343;
}

.opciones {
	background: #fff;
	border-radius: 10px;
	box-shadow: 0px 5px 10px rgba(0,0,0,.16);
	max-height:auto;
	overflow: auto;
	z-index: 100;
	width: 100%;
	display: none;
    margin-top: 1.2rem;
}

.opciones.active {
	display: block;
	animation: fadeIn .3s forwards;

}

@keyframes fadeIn {
	from {
		transform: translateY(-200px) scale(.5);
	}
	to {
		transform: translateY(0) scale(1);
	}
}

.contenido-opcion {
	width: 100%;
	display: flex;
	align-items: center;
	transition: .2s ease all;
}

.opciones .contenido-opcion {
	padding: .5rem;
}

.contenido-opcion img {
	width: 60px;
	height: 60px;
	margin-right: 30px;
}

.opciones .contenido-opcion:hover {
	   color: white;
    background-color:#1f1f1f;
}

.opciones .contenido-opcion:hover .titulo,
.opciones .contenido-opcion:hover .descripcion {
	color: #fff;
}

@media screen and (max-width: 800px){
	.selectbox {
		width: 100%;
	}
}
    </style>
    @endsection

@push('js')

    <script>
        const select = document.querySelector('#select');
const opciones = document.querySelector('#opciones');
const contenidoSelect = document.querySelector('#select .contenido-select');
const hiddenInput = document.querySelector('#inputSelect');

document.querySelectorAll('#opciones > .opcion').forEach((opcion) => {
	opcion.addEventListener('click', (e) => {
		e.preventDefault();
		contenidoSelect.innerHTML = e.currentTarget.innerHTML;
		select.classList.toggle('active');
		opciones.classList.toggle('active');
		hiddenInput.value = e.currentTarget.querySelector('.titulo').innerText;
	});
});

select.addEventListener('click', () => {
	select.classList.toggle('active');
	opciones.classList.toggle('active');
});
    </script>
    <script src="/assets/js/select2.js"></script>

    <script src="/assets/js/validations/generalFunctions.js"></script>

@endpush
