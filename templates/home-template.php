<?php
/* 
Template Name: Home
*/
$box_title1 = get_field('box_title');
$box_description1 = get_field('box_description');
$image_slider = get_field('image_slider');
$image_slider2 = get_field('image_slider2');
$image_slider3 = get_field('image_slider3');
$image_slider4 = get_field('image_slider4');
$box_title2 = get_field('box_title2');
$box_description2 = get_field('box_description2');
$box_image2 = get_field('box_image2');
$box_title3 = get_field('box_title3');
$box_description3 = get_field('box_description3');
$box_image3 = get_field('box_image3');
$box_title4 = get_field('box_title4');
$box_description4 = get_field('box_description4');
$box_image4 = get_field('box_image4');

get_header();
?>


<main>
    <section id="camaras" class="box slider-container">
        <div class="box__content slider">
            <div class="box__image-container slide">
                <img class="box__image" src="<?php echo $image_slider; ?>" alt="">
            </div>
            <div class="box__image-container slide">
                <img class="box__image" src="<?php echo $image_slider2; ?>" alt="">
            </div>
            <div class="box__image-container slide">
                <img class="box__image" src="<?php echo $image_slider3; ?>" alt="">
            </div>
            <div class="box__image-container slide">
                <img class="box__image" src="<?php echo $image_slider4; ?>" alt="">
            </div>

            <div class="box__text">
                <h2 class="box__title"><?php echo $box_title1; ?></h2>
                <p class="box__info"><?php echo $box_description1; ?></p>
            </div>
        </div>
        <button class="prev" onclick="prevSlide()">Anterior</button>
        <button class="next" onclick="nextSlide()">Siguiente</button>

    </section>
    <section id="alarmas" class="box">
        <div class="box__content box__reverse">
            <div class="box__image-container">
                <img class="box__image" src="<?php echo $box_image2; ?>" alt="">
            </div>
            <div class="box__text">
                <h2 class="box__title"><?php echo $box_title2; ?></h2>
                <p class="box__info"><?php echo $box_description2; ?></p>
            </div>
        </div>
    </section>
    <section id="acceso" class="box">
        <div class="box__content">
            <div class="box__image-container">
                <img class="box__image" src="<?php echo $box_image3; ?>" alt="">
            </div>
            <div class="box__text">
                <h2 class="box__title"><?php echo $box_title3; ?></h2>
                <p class="box__info"><?php echo $box_description3; ?></p>
            </div>
        </div>
    </section>
    <section id="cerco" class="box">
        <div class="box__content box__reverse">
            <div class="box__image-container">
                <img class="box__image" src="<?php echo $box_image4; ?>" alt="">
            </div>
            <div class="box__text">
                <h2 class="box__title"><?php echo $box_title4; ?></h2>
                <p class="box__info"><?php echo $box_description4; ?></p>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>