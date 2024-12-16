<?php
/*
Template Name: Products
*/
?>
<?php get_header(); ?>

<main class='products-container'>
<!-- 
<aside class='products-container__aside' >
    <?php
    $loop = new WP_Query( array(
        'post_type' => 'productos',
        'posts_per_page' => -1,
    ));

    if ( $loop->have_posts() ) :

        while ( $loop->have_posts() ) : $loop->the_post();

            // Get all terms for this post with the taxonomy 'custom-categories'
            $terms = get_the_terms( get_the_ID(), 'custom-categories' );

            if ( $terms && ! is_wp_error( $terms ) ) :
                
                foreach ( $terms as $term ) {
                    // Create an anchor tag with the term name and link to the term archive page
                    $term_link = get_term_link( $term );
                    echo '<a href="' . esc_url( $term_link ) . '">' . esc_html( $term->name ) . '</a> ';
                }
                
            endif;

        endwhile;

        wp_reset_postdata(); // Reset the global $post object

    endif;
    ?>
</aside> -->

<section class='products-container__grid'>
<?php
    $loop = new WP_Query( array(
        'post_type' => 'productos',
        'posts_per_page' => -1,
    ));

    if ( $loop->have_posts() ) :

        while ( $loop->have_posts() ) : $loop->the_post();

        $PRODUCT_IMAGE = get_field('product_image');
        $PRODUCT_HEADING = get_field('product_heading');
        $PRODUCT_DESCRIPTION = get_field('product_short_description');
        $PRODUCT_PRICE = get_field('product_price');
        ?>
            <div class='products-container-single'>
                <div>
                    <img src='<?=$PRODUCT_IMAGE?>' />
                </div>
                <h2><?=$PRODUCT_HEADING;?></h2>
                <p><?=$PRODUCT_DESCRIPTION;?></p>
                <p><?=$PRODUCT_PRICE?></p>
                <a href='<?=the_permalink();?>' >View More</a>
            </div>


        <?
        endwhile;

        wp_reset_postdata(); // Reset the global $post object

    endif;
    ?>
</section>


</main>


<?php get_footer(); ?>
