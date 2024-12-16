<?php
/*
Template Name: Contact Us

*/

?>

<?php get_header();?>

<section class='contact-container'>
    <div class='contact-container__text'>
        <h1>With the best Location to give you the best service!</h1>
        <div class='contact-container__form'>
        <?= do_shortcode('[contact-form-7 id="02abf00" title="Formulario de Contacto Contactanos"]');?>
        </div>
    </div>
    <div class='contact-container__iframe'>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.7549358553433!2d-86.25012912546555!3d12.128912932794051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f73ff9e438c3373%3A0x66922d88ef0bd64f!2sMulti%20Servicios%20AA!5e0!3m2!1ses!2sni!4v1716414468847!5m2!1ses!2sni" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>


<?php get_footer();?>