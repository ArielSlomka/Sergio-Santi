<? 
$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
$hero_image = get_field('hero_image');
?>



<header class="header" style= 'background: linear-gradient(to bottom, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.25)), url("<?php echo $hero_image; ?>"); background-size: cover;'>
        <div class="header__titulo">
            <h1><?php echo $hero_title; ?></h1>
            <h2><?php echo $hero_subtitle; ?></h2>
        </div>
    </header>
    <button id="open" class="open-menu"><i class="bi bi-list"></i></button>
    <nav class="nav" id="nav">
        <button id="close" class="close-menu"><i class="bi bi-x"></i></button>
        <ul class="nav__list">
            <li class="nav__item"><a href="#camaras">Cámaras</a></li>
            <li class="nav__item"><a href="#alarmas">Alarmas</a></li>
            <li class="nav__item"><a href="#acceso">Control acceso</a></li>
            <li class="nav__item"><a href="#cerco">Cerco eléctrico</a></li>
            <li class="nav__item"><a href="#contactame">Contáctame</a></li>
        </ul>
    </nav>