
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreedoomDay</title>
    <link rel="stylesheet" href="{{ asset('assets/css/home') }}/Estilo_Souvenir.css">
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
                    <img src="assets/menu.svg" class="menu__img">
                </div>
            </section> 
        </nav>
    
        <script src="{{ asset('assets/js/home') }}/app.js"></script>
            
            
        </header>
        
<div class="pos1">

    <div class="card">
        <div class="circle" style="--clr:#bdc3c7">
            <img id="img" src="{{ asset('assets/img/home/img') }}/bottel.png" class="logo">
        </div>
        <div class="content">
            <p><b>Paquete Junior</b><br>Incluye:</p>
                <li class="li">Libreta</li>
                <li class="li">Stikers</li>
                <br>
            <p><b>Precio: $150.00</b></p>
            <a href="/HTML/Inicio_Sesion.html">Comprar</a>
        </div>
        <img id="bs" src="{{ asset('assets/img/home/img') }}/bottel.png" class="product_img">
 </div>

    <div class="card">
        <div class="circle" style="--clr:#bdc3c7">
            <img id="libr" src="{{ asset('assets/img/home/img') }}/libret.png" class="logo">
        </div>
        <div class="content">
            <p><b>Paquete Semi Senior</b><br>Incluye:</p>
                <li class="li">Termo</li>
                <li class="li">Taza</li>
                <li class="li">Stikers</li>
                <br>
            <p><b>Precio: $250.00</b></p>
            <a href="/HTML/Inicio_Sesion.html">Comprar</a>
        </div>
        <img id="libreta" src="{{ asset('assets/img/home/img') }}/libret.png" class="product_img">
    </div>

    <div class="card">
        <div class="circle" style="--clr:#bdc3c7">
            <img id="taza" src="{{ asset('assets/img/home/img') }}/cup.png" class="logo">
        </div>
        <div class="content">
            <p><b>Paquete Senior</b><br>Incluye:</p>
                <li class="li">Libreta</li>
                <li class="li">Termo</li>
                <li class="li">Taza</li>
                <li class="li">Stikers</li>
                <br>
            <p><b>Precio: $350.00</b></p>
            <a href="/HTML/Inicio_Sesion.html">Comprar</a>
        </div>
        <img id="xa" src="{{ asset('assets/img/home/img') }}/cup.png" class="product_img">
    </div>

    <div class="card">
        <div class="circle" style="--clr:#bdc3c7">
            <img id="pl" src="{{ asset('assets/img/home/img') }}/playera.png" class="logo">
        </div>
        <div class="content">
            <p><b>Paquete Master</b><br>Incluye:</p>
                <li class="li">Playera</li>
                <li class="li">Libreta</li>
                <li class="li">Termo</li>
                <li class="li">Taza</li>
                <li class="li">Stikers</li>
                <br>
            <p><b>Precio: $450.00</b></p>
            <a href="/HTML/Inicio_Sesion.html">Comprar</a>
        </div>
        <img id="pla" src="{{ asset('assets/img/home/img') }}/playera.png" class="product_img">
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
    
 