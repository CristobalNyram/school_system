
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreedoomDay</title>
    <link rel="stylesheet" href="{{ asset('assets/css/home') }}/Estilo_Conferencias.css">
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
    
        <script src="{{ asset('assets/js/home') }}/app.js"></script>
            
            
        </header>
        
<section class="gal">
    <a href="/HTML/Conferencias/Conferencias_1.html">
        <figure id="cur">
            <img src="https://neetwork.com/wp-content/uploads/2018/07/como-dar-una-conferencia1.jpg">
            <div class="con">
                <h3>Conferencia 1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio expedita ex nobis numquam quis?
                    Accusamus, facere id itaque nam inventore repellat a non ad provident, saepe omnis quod
                    doloremque iure.</p>
            </div>

        </figure>
    </a>

    <a href="/HTML/Conferencias/Conferencias_2.html">

        <figure>
            <img src="https://news.sap.com/latinamerica/files/2022/07/18/DSC03775-1.jpg">
        <div class="con">
            <h3>Conferencia 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio expedita ex nobis numquam quis?
                Accusamus, facere id itaque nam inventore repellat a non ad provident, saepe omnis quod doloremque
                iure.</p>
            </div>
        </figure>
    </a>


    <a href="/HTML/Conferencias/Conferencias_3.html">

        <figure>
            <img src="https://projetosespeciais.com/wp-content/uploads/2018/11/conferencia.jpg">
            <div class="con">
                <h3>Conferencia 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio expedita ex nobis numquam quis?
                    Accusamus, facere id itaque nam inventore repellat a non ad provident, saepe omnis quod doloremque
                    iure.</p>
                </div>
            </figure>
        </a>


        <a href="/HTML/Conferencias/Conferencias_4.html">

            <figure>
                <img src="https://usercontent.one/wp/www.entornoestudiantil.com/wp-content/uploads/2020/12/roastbrief-oratoria-7-consejos-para-dar-conferencias-inolvidables.jpg">
            <div class="con">
            <h3>Conferencia 4</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio expedita ex nobis numquam quis?
                Accusamus, facere id itaque nam inventore repellat a non ad provident, saepe omnis quod doloremque
                iure.</p>
            </div>
        </figure>
    </a>

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