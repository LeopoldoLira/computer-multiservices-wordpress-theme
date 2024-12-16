<?php get_header(); ?>


<?
$SINGLE_SERVICE_IMAGE_PRESENTATION = get_field('single_service_image_presentation');
$SINGLE_SERVICE_HEADING_PRESENTATION = get_field('single_service_heading_presentation');
$SINGLE_SERVICE_DESCRIPTION_PRESENTATION = get_field('single_service_description_presentation');

?>

<section class='service-container'>
    <div class='service-container__image'>
        <img src='<?=$SINGLE_SERVICE_IMAGE_PRESENTATION;?>' />
    </div>
    <div class='service-container__description'>
        <h1><?=$SINGLE_SERVICE_HEADING_PRESENTATION?></h1>
        <p><?=$SINGLE_SERVICE_DESCRIPTION_PRESENTATION?></p>
        <a href='/contactanos'>Get a quote!</a>
    </div>
</section>



<?php get_footer(); ?>