<?php
/*
Template Name: About us

*/

?>

<?php get_header();?>


<?
$About_us_heading = get_field('about_us_heading');
$About_us_subheading = get_field('about_us_subheading');
$About_us_description = get_field('about_us_description');
$About_us_image = get_field('about_us_image');

?>

<section class='about_us-section__heading'>
    <h1><?=$About_us_heading;?></h1>
</section>

<section class='about_us-section'>
    <div class='about_us-section__photo'>
        <img src='<?=$About_us_image;?>' alt='Acerca de Nosotros'/>
    </div>
    <div class='about_us-section__text'>
        <h2><?=$About_us_subheading;?></h2>
        <p><?=$About_us_description;?></p>
    </div>
</section>

<?php get_footer();?>