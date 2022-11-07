<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config_name_system() }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/home') }}/Estilo_Talleres.css">
    <link rel="stylesheet" href="{{ asset('assets/css/home') }}/barra.css">
    <link href="{{ asset('argon/brand') }}/favicon.png" rel="icon" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/css/home') }}/Estilo_index_R.css">
</head>
<header>
    <nav class="menu">
            <section class="menu__container">


                <ul class="menu__links">

                <li clas="menu_item">
                    <a href="{{ route('home_page_index') }}" class="logo" id="tope"><img src="{{ asset('assets/img/home/img') }}/logo.png" width="100px"></a>
                    </li>
                    <li class="menu_item">

                        <section class="containerR">

                            <div class="charts">


                                <div class="chart">
                                    <!-- un circulo inicial de fondo -->
                                    <div class="circle center-abs"></div>
                                    <!-- area para SVG -->
                                    <svg class="center-abs" width="150" height="150">
                                        <!-- un segundo circulo en SVG con su ubicacion en coordenadas x,y y el radio de expansion -->
                                        <circle class="outer" id="circulo1" cx="75" cy="75" r="30" />
                                    </svg>
                                    <!-- etiqueta para el contador, en este caso el dia -->
                                    <span class="text center-abs" id="days"></span>
                                    <h3 id="textcolor1">Dias</h3>
                                </div>
                                <div class="chart">
                                    <div class="circle center-abs"></div>
                                    <svg class="center-abs" width="150" height="150">
                                        <circle class="outer" id="circulo2" cx="75" cy="75" r="30" />
                                    </svg>
                                    <span class="text center-abs" id="hours"></span>
                                    <h3 id="textcolor2">Horas</h3>
                                </div>
                                <div class="chart">
                                    <div class="circle center-abs"></div>
                                    <svg class="center-abs" width="150" height="150">
                                        <circle class="outer"  id="circulo3" cx="75" cy="75" r="30" />
                                    </svg>
                                    <span class="text center-abs" id="minutes"></span>
                                    <h3 id="textcolor3">Minutos</h3>
                                </div>
                                <div class="chart">
                                    <div class="circle center-abs"></div>
                                    <svg class="center-abs" width="150" height="150">
                                        <circle class="outer" id="circulo4"cx="75" cy="75" r="30" />
                                    </svg>
                                    <span class="text center-abs" id="seconds"></span>
                                    <h3 id="textcolor4">Segundos</h3>
                                </div>
                            </div>
                        </section>
                    </li>
                    <li class="menu__item">
                        <a href="{{ route('really_index') }}" class="menu__link">Really</a>
                    </li>


                    <li class="menu__item">
                        <a href="{{ route('timeline_index') }}" class="menu__link">Horario</a>
                    </li>

                    <li class="menu__item">

                             <a href="{{ route('home_page_sponsor') }}" class="menu__link">Patrocinadores</a>

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


                            <a href="{{ route('home_page_login') }}" class="menu__link">Inicio<span style="color:black">_</span>de<span style="color:black">_</span>Sesión</a>

                    </li>

                </ul>

                <div class="menu__hamburguer">
                    <img src="{{ asset('assets/img/home/img') }}/menu.svg" class="menu__img">
                </div>
            </section>
        </nav>

        <script src="{{ asset('assets/js/home') }}/reloj.js"></script>


        <script src="{{ asset('assets/js/home') }}/app.js"></script>


        </header>

<div class="carta">
@foreach($courses1 as $course1)
    <div class="separador">

        <div class="spx">

            <figure>
                <img src="{{asset($course1->url_img )}}">
                <div class="capa">
                    <h3>{{$course1->title}}</h3>
                    <p>{{$course1->description}}</p>
                    <a href="{{ route('course_interface', $courses1[0]) }}">
                        <button>+INFO</button>
                    </a>

                </div>
            </figure>
        </div>
    </div>
    @endforeach
    @foreach($courses2 as $course2)
    <div class="separador">

        <div class="spx">

            <figure>
                <img src="{{asset($course2->url_img )}}">
                <div class="capa">
                    <h3>{{$course2->title}}</h3>
                    <p>{{$course2->description}}</p>
                    <a href="{{ route('course_interface', $courses2[1]) }}">
                        <button>+INFO</button>
                    </a>

                </div>
            </figure>
        </div>
    </div>
    @endforeach
    @foreach($courses3 as $course3)
    <div class="separador">

        <div class="spx">

            <figure>
                <img src="{{asset($course3->url_img )}}">
                <div class="capa">
                    <h3>{{$course3->title}}</h3>
                    <p>{{$course3->description}}</p>
                    <a href="{{ route('course_interface', $courses3[2]) }}">
                        <button>+INFO</button>
                    </a>

                </div>
            </figure>
        </div>
    </div>
    @endforeach
    @foreach($courses4 as $course4)
    <div class="separador">

        <div class="spx">

            <figure>
                <img src="{{asset($course4->url_img )}}">
                <div class="capa">
                    <h3>{{$course4->title}}</h3>
                    <p>{{$course4->description}}</p>
                    <a href="{{ route('course_interface', $courses4[3]) }}">
                        <button>+INFO</button>
                    </a>

                </div>
            </figure>
        </div>
    </div>
    @endforeach
    @foreach($courses5 as $course5)
    <div class="separador">

        <div class="spx">

            <figure>
                <img src="{{asset($course5->url_img )}}">
                <div class="capa">
                    <h3>{{$course5->title}}</h3>
                    <p>{{$course5->description}}</p>
                    <a href="{{ route('course_interface', $courses5[4]) }}">
                        <button>+INFO</button>
                    </a>

                </div>
            </figure>
        </div>
    </div>
    @endforeach
    @foreach($courses6 as $course6)
    <div class="separador">

        <div class="spx">

            <figure>
                <img src="{{asset($course6->url_img )}}">
                <div class="capa">
                    <h3>{{$course6->title}}</h3>
                    <p>{{$course6->description}}</p>
                    <a href="{{ route('course_interface', $courses6[5]) }}">
                        <button>+INFO</button>
                    </a>

                </div>
            </figure>
        </div>
    </div>
    @endforeach
    @foreach($courses7 as $course7)
    <div class="separador">

        <div class="spx">

            <figure>
                <img src="{{asset($course7->url_img )}}">
                <div class="capa">
                    <h3>{{$course7->title}}</h3>
                    <p>{{$course7->description}}</p>
                    <a href="{{ route('course_interface', $courses7[6]) }}">
                        <button>+INFO</button>
                    </a>

                </div>
            </figure>
        </div>
    </div>
    @endforeach
    @foreach($courses8 as $course8)
    <div class="separador">

        <div class="spx">

            <figure>
                <img src="{{asset($course8->url_img )}}">
                <div class="capa">
                    <h3>{{$course8->title}}</h3>
                    <p>{{$course8->description}}</p>
                    <a href="{{ route('course_interface', $courses8[7]) }}">
                        <button>+INFO</button>
                    </a>

                </div>
            </figure>
        </div>
    </div>
    @endforeach
    @foreach($courses9 as $course9)
    <div class="separador">

        <div class="spx">

            <figure>
                <img src="{{asset($course9->url_img )}}">
                <div class="capa">
                    <h3>{{$course9->title}}</h3>
                    <p>{{$course9->description}}</p>
                    <a href="{{ route('course_interface', $courses9[8]) }}">
                        <button>+INFO</button>
                    </a>

                </div>
            </figure>
        </div>
    </div>
    @endforeach
    @foreach($courses10 as $course10)
    <div class="separador">

        <div class="spx">

            <figure>
                <img src="{{asset($course10->url_img )}}">
                <div class="capa">
                    <h3>{{$course10->title}}</h3>
                    <p>{{$course10->description}}</p>
                    <a href="{{ route('course_interface', $courses10[9]) }}">
                        <button>+INFO</button>
                    </a>

                </div>
            </figure>
        </div>
    </div>
    @endforeach
</div>


<footer>
    <div class="container">
        <p>&copy; Copyright Software-Freedom Day 2022<br><br>Todos los derechos reservados. <br>Deasarrollado por {{ config_author_system() }}
        </p>
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
    </div>
</footer>

<script src="{{ asset('assets/js/home') }}/galeria.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="{{ asset('assets/js/home') }}/menu.js"></script>
