<?php
/*
Template Name: Services Template
*/
?>
<?php get_header(); ?>

<section class='services-container'>
    <div class='services-container__heading'>
        <h1>At Multi Services AA we offer every computer service that you will ever need!</h1>
    </div>
    <div class='services-container__grid'>
    <?php

      $services_args = array(
            'post_type' => 'servicios',
            'post_per_page' => -1,
            'suppress_filters' => FALSE,
            'post_status' => 'publish',
            'order' => 'ASC',
            'post_parent' => 0,
        );
        $services = new WP_query($services_args);

         // Load sub field value.
      
        ?>  

       
<?php if ( $services->have_posts() ): while( $services->have_posts() ): $services->the_post(); ?>

<?   $single_service_image = get_field('single_service_image');
         $single_service_heading = get_field('single_service_heading'); 
         $single_service_description = get_field('single_service_description');?>
        <div>
            <img src='<?=$single_service_image?>' />
            <h2><?=$single_service_heading?></h2>
            <p><?=$single_service_description?></p>
            <a href='<?=the_permalink();?>'>Learn More</a> 
        </div>
<?php endwhile; endif; ?>

    </div>
</section>


<?php get_footer(); ?>