<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreedoomDay</title>
    <link rel="stylesheet" href="{{ asset('assets/css/home') }}/Estilo_Talleres.css">
    <link rel="icon" href="{{ asset('assets/img/home/img') }}/logo.png">
</head>
<header>
    <nav class="menu">
            <section class="menu__container">
                <a href="/index.html" class="logo" id="tope"><img src="{{ asset('assets/img/home/img') }}/logo.png"></a>
    
                <ul class="menu__links">
                    <li class="menu__item">
                        <a href="/index.html" class="menu__link">Inicio</a>
                    </li>
        
                    <li class="menu__item">
                        <div class="tex1">
    
                            <a href="/HTML/Patrocinadores.html" class="menu__link">Nuestros Patrocinadores</a>
                        </div>
                    </li>
    
                    <li class="menu__item">
                        <a href="/HTML/Talleres.html" class="menu__link">Talleres</a>
                    </li>
        
                    <li class="menu__item">
                        <a href="/HTML/Conferencia.html" class="menu__link">Conferencias</a>
                    </li>
    
                    <li class="menu__item">
                        <a href="/HTML/Souvenir.html" class="menu__link">Souvenirs</a>
                    </li>
        
                    <li class="menu__item">
                        <div class="tex">
    
                            <a href="/HTML/Inicio_Sesion.html" class="menu__link">Inicio de Sesión</a>
                        </div>
                    </li>
                    
                </ul>
    
                <div class="menu__hamburguer">
                    <img src="assets/menu.svg" class="menu__img">
                </div>
            </section> 
        </nav>
    
        <script src="{{ asset('assets/js/home') }}app.js"></script>
            
            
        </header>
        <div class="carta">

            <div class="separador">
            
                <div class="spx">
                    <figure>
                        <img src="{{ asset('assets/img/home/img/cursos') }}/video.png">
                        <div class="capa">
                            <h3>Sistema de Videovigilancia</h3>
                            <p>
                                En este curso aprenderás las bases de instalación y uso de los sistem...
                            </p>
                            <a href="/HTML/Cursos/Curso1.html">
                                    <button>+INFO</button>
                                    </a>
            
                        </div>
                    </figure>
                </div>
            
            
                <div class="spx">
                    <figure>
                        <img src="{{ asset('assets/img/home/img/cursos') }}/base.png">
                        <div class="capa">
                            <h3>Base de Datos</h3>
                            <p>Una base de datos es una recopilación organizada de informaci...</p>
                            <a href="/HTML/Cursos/Curso2.html">
                                    <button>+INFO</button>
                                    </a>
                        </div>
                    </figure>
                </div>
            </div>
            
            
            <div class="separador">
            
                <div class="spx">
                    <figure>
                        <img src="{{ asset('assets/img/home/img/cursos') }}/node.png">
                        <div class="capa">
                            <h3>Bot WhatsApp con NODE JS</h3>
                            <p>Node.js es un entorno en tiempo de ejecución multiplataforma, de código abier...</p>
                            <a href="/HTML/Cursos/Curso3.html">
                                    <button>+INFO</button>
                                    </a>
                        </div>
                    </figure>
                </div>
            
            
            
                <div class="spx">
                    <figure>
                        <img src="{{ asset('assets/img/home/img/cursos') }}/debian.png">
                        <div class="capa">
                            <h3>Servidor Web con Debian</h3>
                            <p>Debian es un sistema operativo adecuado para un amplio rango de dispositivos incluyendo
                          </p>
                          <a href="/HTML/Cursos/Curso4.html">
                                    <button>+INFO</button>
                                    </a>
                        </div>
                    </figure>
                </div>
            </div>
            
            
            
            <div class="separador">
                <div class="spx">
                    <figure>
                        <img src="{{ asset('assets/img/home/img/cursos') }}/mikro.png">
                        <div class="capa">
                            <h3>MICROTIK y HOSTPOST</h3>
                            <p>MikroTik es un fabricante letón de equipos de red. La compañía desarrolla y vende enrutado...
                            </p>
                            <a href="/HTML/Cursos/Curso5.html">
                                    <button>+INFO</button>
                                    </a>
                        </div>
                    </figure>
                </div>
            
            
                <div class="spx">
                    <figure>
                        <img src="{{ asset('assets/img/home/img/cursos') }}/api.png">
                        <div class="capa">
                            <h3>Desarrollo de APIS desde 0</h3>
                            <p>Una API es un conjunto de definiciones y protocolos que se utiliza para desarro...</p>
                            <a href="/HTML/Cursos/Curso6.html">
                                    <button>+INFO</button>
                                    </a>
                        </div>
                    </figure>
                </div>
            </div>
            </div>

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