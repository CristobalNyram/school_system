<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreedoomDay</title>
    <link rel="stylesheet" href="{{ asset('assets/css/home') }}/Estilo_cronograma.css">
    <link rel="stylesheet" href="{{ asset('assets/css/home') }}/Estilo_index_R.css">
</head>
<header>
    <nav class="menu">
            <section class="menu__container">
                
    
                <ul class="menu__links">
                    <li class="menu_item">
                    <a href="{{ route('home_page_index') }}" class="logo" id="tope"><img src="{{ asset('assets/img/home/img') }}/logo.png"></a>
                    
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
                        <a href="{{ route('home_page_index') }}" class="menu__link">Really</a>
                    </li>
                    
        
                    <li class="menu__item">
                        <a href="{{ route('home_page_index') }}" class="menu__link">Horario</a>
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
<body>

<div class="contenedor">
        <div class="titulo"><img src="{{ asset('assets/img/home/img') }}/Logos_circulo 1 (1).svg" alt=""></div>
        <div class="cuadros">
            <div class="espacio es1"> <ion-icon class="icono" name="golf-outline"></ion-icon> <p>Registro 8:00 am – 8:30 am </p> </div>
            <div class="espacio es2"> <ion-icon class="icono" name="ribbon-outline"></ion-icon> <p>Bienvenida  8:30 am – 9:00 am  </p> </div>
            <div class="espacio es3"> <ion-icon class="icono" name="person-outline"></ion-icon> <p>Primera conferencia (inteligencia artificial)  9:00 am – 9:40 am </p></div>
            <div class="espacio es4"> <ion-icon class="icono" name="people-outline"></ion-icon> <p>Mesa Empresarial 9:40 am – 10:20 am 
                </p></div>
            <div class="espacio es5"> <ion-icon class="icono" name="cafe-outline"></ion-icon> <p>Coffe Breake 10:20 am – 10:50 am</p></div>
            <div class="espacio es6"> <ion-icon class="icono" name="person-outline"></ion-icon>  <p>Segunda conferencia (finanzas) 11:00 am – 11:40 am </p> </div>
            <div class="espacio es7"> <ion-icon class="icono" name="people-outline"></ion-icon><p>Charla empresarial (sanitización) 12:00 pm – 12:30 pm</p> </div>
            <div class="espacio es8"> <ion-icon class="icono" name="people-outline"></ion-icon> <p>Charla empresarial (transporte) 12:30pm – 1:00pm</p></div>
            <div class="espacio es9"> <ion-icon class="icono" name="fast-food-outline"></ion-icon><p>Comida (salida para los alumnos para que salgan a comer) 13:00 pm – 14:00 pm  </p></div>
            <div class="espacio es10"> <ion-icon  class="icono"name="school-outline"></ion-icon> <p>Talleres 14:00 pm – 18:00 pm  
            </p></div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>