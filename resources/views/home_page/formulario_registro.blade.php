
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreedoomDay</title>
    <link rel="stylesheet" href="{{ asset('assets/css/home') }}/Estilo_Formulario_R.css">
    
    <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        @stack('js')

        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    <style>
        body {
            background-image: url("../assets/img/home/img/ins.png");
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/home') }}/barra.css">
    <link rel="icon" href="{{ asset('assets/img/home/img') }}/logo.png">
</head>
<header>
<nav class="menu">
            <section class="menu__container">
                <a href="{{ route('home_page_index') }}" class="logo" id="tope"><img src="{{ asset('assets/img/home/img') }}/logo.png"></a>
    
                <ul class="menu__links">
                    <li class="menu__item">
                        <a href="{{ route('home_page_index') }}" class="menu__link">Inicio</a>
                    </li>
        
                    <li class="menu__item">
                        <div class="tex1">
    
                            <a href="{{ route('home_page_sponsor') }}" class="menu__link">Nuestros Patrocinadores</a>
                        </div>
                    </li>
    
                    <li class="menu__item">
                        <a href="{{ route('home_page_course') }}" class="menu__link">Talleres</a>
                    </li>
        
                    <li class="menu__item">
                        <a href="{{ route('home_page_conference') }}" class="menu__link">Conferencias</a>
                    </li>
    
                    <li class="menu__item">
                        <a href="{{ route('home_page_souvenir') }}" class="menu__link">Souvenirs</a>
                    </li>
        
                    <li class="menu__item">
                        <div class="tex">
    
                            <a href="{{ route('home_page_login') }}" class="menu__link">Inicio de Sesión</a>
                        </div>
                    </li>
                    
                </ul>
    
                <div class="menu__hamburguer">
                    <img src="{{ asset('assets/img/home/img') }}/menu.svg" class="menu__img">
                </div>
            </section> 
        </nav>
    
        <script src="{{ asset('assets/js/home') }}/app.js"></script>
            
            
        </header>
        <div id="posi">


            <section class="forma">
                <h1>Registro</h1>
                <br>
                
                <form method="POST" action="{{route('student_store')}}">
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
                        {{ $error }} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    @endforeach
                    @endif
                <div class="con">
                        <label for="name">Nombre</label>
                        <input type="text" style="color:black;" class="con" id="name" name="name" value="{{   old('name') }}" placeholder="Nombre " max="50" required oninput="uppercaseLetters(event);">
                </div>

                <div class="con">
                        <label for="first_surname">Apellido de parterno</label>
                        <input type="text" style="color:black;" class="con" id="first_surname" name="first_surname" value="{{ old('first_surname') }}" placeholder="Apellido paterno" max="50" required oninput="uppercaseLetters(event);">
                </div>

                <div class="con">
                        <label for="second_surname">Apellido de materno</label>
                        <input type="text" style="color:black;" class="con" id="second_surname" name="second_surname" value="{{ old('second_surname') }}" placeholder="Apellido materno " max="50" required oninput="uppercaseLetters(event);">
                </div>

                <div class="form-group">
                        <label for="role_id"></label>
                        <input type="hidden" class="form-control form-control-lg" id="role_id" name="role_id" value="4" placeholder="Rol del estudiante" max="50" required oninput="uppercaseLetters(event);">
                    </div>

                    <div class="con">
                        <label for="gender">Genero</label>

                        <select class="con" style="color:black;" data-toggle="select2" id="gender" name="gender">
                            <option value="-1" selected>Seleccionar</option>
                            <option value="H">Masculino</option>
                            <option value="M">Feminino</option>
                            <option value="N/A">No binario</option>


                        </select>
                    </div>

                    <div class="con">
                        <label for="career">Carrera</label>

                        <select class="con" style="color:black;" data-toggle="select2" name="career" id="career">
                            <option value="-2" selected>Seleccionar</option>
                            @foreach ($carrers_available as $carrer )
                            <option value="{{ $carrer->id }}">{{ $carrer->name }}</option>

                            @endforeach
                        </select>
                    </div>
                
                <div class="con">
                        <label for="quarter">Cuatrimestre</label>

                        <select class="con" style="color:black;" data-toggle="select2" id="quarter" name="quarter">
                            <option value="-3" selected>Seleccionar</option>
                            <option value="first">1° Primero</option>
                            <option value="second">2° Segundo</option>
                            <option value="third">3° Tercero</option>
                            <option value="fourth">4° Cuarto</option>
                            <option value="fifth">5° Quinto</option>
                            <option value="sixth">6° Sexto</option>
                            <option value="seventh">7° Séptimo</option>
                            <option value="eighth">8° Octavo</option>
                            <option value="nineth">9° Noveno</option>
                            <option value="tenth">10° Décimo</option>



                        </select>
                    </div>

                    <div class="con">
                        <label for="group">Grupo</label>

                        <select class="con" style="color:black;" data-toggle="select2" id="group" name="group">
                            <option value="-4" selected>Seleccionar</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>




                        </select>
                    </div>
                
                    <div class="con">
                        <label for="email">Correo electronico</label>
                        <input type="email" style="color:black;" class="con" id="email" name="email" value=" {{ old('email') }}" placeholder="Correo electronico ." required maxlength="50">
                    </div>

                    <div class="con">
                        <label for="password">Password</label>
                        <input type="password"  class="con" id="password" value="{{ old('password') }}" name="password" placeholder="Crear Contraseña." required maxlength="50">
                    </div>

                    <div class="con">
                        <label for="password_confirmation">Confirmar contraseña</label>
                        <input type="password"  class="con" id=" password_confirmation" name="password_confirmation" placeholder="Confirmar contraseña." required maxlength="50">
                    </div>

                    <div class="con">
                        <label for="user_image">Foto del Estudiante</label>
                        <input type="file" onBlur='LimitAttach(this,1)' ; accept="image/*" class="con" id="user_image" name="user_image" placeholder="Foto del Conferencista" max="50" required oninput="uppercaseLetters(event);">
                    </div>

                    <div class="alert alert-warning alert-dismissible fade show" id="alerta" role="alert" style="display: none" role="alert">
                        <span class="alert-inner--text"><strong>Advertencia: </strong> Sólo se aceptan archivos con extensiones .jpeg, .jpe, .jpg, .png</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            
               

               
                <button type="submit">Enviar</button> 
                
                </form>
                
                
         

               
                
                
            </section>


        </div>




        <footer>
            <div class="container"></div>
            <p>&copy; Copyright Software-Freedom Day 2022<br><br>Todos los derechos reservados. <br>Deasarrollado por REEB</p>
            <center>
                <a href="https://www.facebook.com/Freedom-Day-TI-Uttecam-477721659417275">
                    <span class="icono"></span>
                    <ion-icon class="tam" name="logo-facebook"></ion-icon>
                    <span class="texto"> </span>
                </a>
    
            <a class="icon" href="https://goo.gl/maps/BWKybpucUgH8QXzf6">
                <span class="icono"></span>
                <ion-icon name="location-outline"></ion-icon>
                <span class="texto"> </span>
            </a>
            </center>
        </footer>
    
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>