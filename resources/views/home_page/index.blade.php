
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreedoomDay</title>
    <link rel="stylesheet" href="{{ asset('assets/css/home') }}/Estilo_index.css">
    <link rel="stylesheet" href="{{ asset('assets/css/home') }}/barra.css">
    <link rel="icon" href="{{ asset('assets/img/home/img') }}/logo.png">
    <link rel="stylesheet" href="{{ asset('assets/css/home') }}/Estilo_index_R.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
        <div class="fondo">
            <div class="textos">
    
            <img class=" ha animate__animated animate__pulse animate__delay-2s animate__infinite"  src="{{ asset('assets/img/home/img') }}/logo.png">
            </div>
    
           
    
        </div>
        <div class="shib">
            <div class="barra">
                <span class="oki"> <i class="sec"></i>--</span>
                <ul class="lis">
                    <li><a href="#q"><i class="vi"></i>¿Qué es?</a></li>
                    <li><a href="#o"><i class="vi"></i>Objetivo</a></li>
                    <li><a href="#p"><i class="vi"></i>Proposito</a></li>
                    <li><a href="#g"><i class="vi"></i>Galería</a></li>
                </ul>
            </div>
        </div>
        <script src="{{ asset('assets/js/home') }}/menu.js"></script>
        <div id="q" class="que">
            <h1>¿QUÉ ES SOFTWARE-</span><span class="freed">FREEDOM <span class="day">DAY</span></span>?</h1><br>
            <p>Es un evento organizado por alumnos y docentes de la carrera de Tecnologías de la Información en la
                Univesidad Tecnológica de Tecamachalco,
                ahora en nuestra 6ta Edición. El evento esta enfocado en el area de Desarrollo de Software y Redes
                Inteligentes.<br>El
                evento Software-Freedom Day te invitamos a participar los dias 25 y 26 de noviembre en este
                gran evento.
            </p>
            <img class="logo22" src="{{ asset('assets/img/home/img') }}/logo.png">
        </div>
    
        <div id="o" class="pro">
            <h1>Objetivo</h1><br>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi atque explicabo repudiandae. Omnis, facilis
                nihil, reiciendis ea enim commodi qui, deserunt nulla tempora et optio impedit cumque obcaecati porro
                recusandae.</p>
        </div>
    
    
        <div id="p" class="ob">
            <h1>Proposito</h1><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nesciunt ut veniam eos, doloremque nam
                totam aperiam modi quidem est laborum, vero beatae repellendus quam. Nisi earum assumenda rem odio.</p>
        </div>
        <!--Galeria-->
<div id="g" class="gal">
    <h2>GALERÍA</h2>
</div>

<div class="toky">
    <div class="reze" style="background-image: url(assets/img/home/img/galeria/01.png);" >
        <h3></h3>

    </div>
    

    <div class="reze" style="background-image: url(assets/img/home/img/galeria/02.png);">
        <h3></h3>
    </div>

    <div class="reze" style="background-image: url(assets/img/home/img/galeria/03.png);">
        <h3></h3>
    </div>

    <div class="reze" style="background-image: url(assets/img/home/img/galeria/04.png);">
    </div>

    <div class="reze" style="background-image: url(assets/img/home/img/galeria/05.png);">
    </div>

    <div class="reze active" style="background-image: url(assets/img/home/img/galeria/06.png);">
    </div>

    <div class="reze" style="background-image: url(assets/img/home/img/galeria/07.png);">
    </div>

    <div class="reze" style="background-image: url(assets/img/home/img/galeria/08.png);">
    </div>

    <div class="reze" style="background-image: url(assets/img/home/img/galeria/09.png);">
    </div>

    <div class="reze" style="background-image: url(assets/img/home/img/galeria/10.png);">
    </div>

    <div class="reze" style="background-image: url(assets/img/home/img/galeria/11.png);">
    </div>

    <div class="reze" style="background-image: url(assets/img/home/img/galeria/12.png);">
    </div>

    <div class="reze" style="background-image: url(assets/img/home/img/galeria/13.png);">
    </div>

    <div class="reze" style="background-image: url(assets/img/home/img/galeria/14.png);">
    </div>

    <div class="reze" style="background-image: url(assets/img/home/img/galeria/15.png);">
    </div>

    <div class="reze" style="background-image: url(assets/img/home/img/galeria/16.png);">
    </div>

    <div class="reze" style="background-image: url(assets/img/home/img/galeria/17.png);">
    </div>

</div>
<script src="{{ asset('assets/js/home') }}/galeria.js"></script>
<section id="patro">

        
    <h2>Patrocinios</h2>
@foreach($sponsors2 as $sponsor)
<ul>
        <li>
            <img src="{{asset($sponsor->url_img )}}" width="100">
        </li>
        <li>
            <img src="{{asset($sponsor->url_img )}}" width="100">

        </li>
        <li>
            <img src="{{asset($sponsor->url_img )}}" width="100">
        </li>
        <li>
            <img src="{{asset($sponsor->url_img )}}" width="100">
        </li>
        <li>
            <img src="{{asset($sponsor->url_img )}}" width="100">
        </li>
        <li>
            <img src="{{asset($sponsor->url_img )}}" width="100">
        </li>
        <li>
            <img src="{{asset($sponsor->url_img )}}" width="100">
        </li>
        <li>
            <img src="{{asset($sponsor->url_img )}}" width="100">
        </li>
        <li>
            <img src="{{asset($sponsor->url_img )}}" width="100">
        </li>
        <li>
            <img src="{{asset($sponsor->url_img )}}" width="100">
        </li>

    </ul>
    @endforeach
</section>

<footer>
        <div class="container">
        <p>&copy; Copyright Software-Freedom Day 2022<br><br>Todos los derechos reservados. <br>Deasarrollado por REEB
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