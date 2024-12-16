<?php get_header(); ?>

<?
    $SINGLE_TEMPLATE_PRODUCT_IMAGE = get_field('product_image');
    $SINGLE_TEMPLATE_PRODUCT_HEADING = get_field('product_heading');
    $SINGLE_TEMPLATE_PRODUCT_DESCRIPTION = get_field('product_long_description');
    $SINGLE_TEMPLATE_PRODUCT_PRICE = get_field('product_price');


?>

<main class='product-container'>
    <div class='product-container__image'>
        <img src='<?=$SINGLE_TEMPLATE_PRODUCT_IMAGE?>'/>
        
    </div>

    <div class='product-container__features'>
        <h1><?=$SINGLE_TEMPLATE_PRODUCT_HEADING?></h1>
        <p class='product-container__features__description'><?=$SINGLE_TEMPLATE_PRODUCT_DESCRIPTION?></p>
        <p class='product-container__features__price'> $<?=$SINGLE_TEMPLATE_PRODUCT_PRICE?></p>
        <?php
// Check rows exists.
if( have_rows('products_features_list') ):

    // Loop through rows.
    while( have_rows('products_features_list') ) : the_row();

        // Load sub field value.
        $PRODUCT_FEATURE_LIST = get_sub_field('product_features_list');
        // Do something, but make sure you escape the value if outputting directly...
        ?>
        <ul class='product-container__features__list'>
            <li>
                <p><?=$PRODUCT_FEATURE_LIST?></p>
            </li>
        </ul>

        <?php
    // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif;
?>
    </div>
</main>


<?php get_footer(); ?>