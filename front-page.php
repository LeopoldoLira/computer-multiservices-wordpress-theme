<?php get_header(); ?>

<main class='landing__hero-section landing-section__overlay'>
    <div>
        <h1>The <span>Correct way</span> to repair your hardware.</h1>
        <h2><span>Multi Services AA</span> is here to help your business</h2>
        <a href='/contactanos'>Learn How</a>
    </div>
</main>


<section class='services__section'>
    <?php
// Check rows exists.
if( have_rows('services') ):

    // Loop through rows.
    while( have_rows('services') ) : the_row();

        // Load sub field value.
        $service_icon = get_sub_field('service_icon');
        $service_name = get_sub_field('service_name');
        $service_description = get_sub_field('service_description');
        // Do something, but make sure you escape the value if outputting directly...
        ?>

        <div>
            <img src='<?echo $service_icon;?>'/>
                <h2><?echo $service_name?></h2>
                <p><?echo $service_description?></p>
        </div>
        <?php
    // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif;
?>
    
</section>

<section class='who-we-are__section'>
    <?
        $who_we_are_image = get_field('who_we_are_image');
        $who_we_are_heading = get_field('who_we_are_heading');
        $who_we_are_subheading = get_field('who_we_are_subheading');
        $who_we_are_description = get_field('who_we_are_description');
    ?>
    <div class='who-we-are-text__section'>
        <p><?=$who_we_are_heading;?><p>
        <h2><?=$who_we_are_subheading;?></h2>
        <p><?=$who_we_are_description;?></p>
        <a href='/nosotros'>Know more about us</a>
    </div>
    <div>
        <img src="<?=$who_we_are_image;?>" alt="Relleno">
    </div>
</section>



<section class='services-offered__section'>
    <div>
        <p>What we Offer</p>
        <h2>We repair Desktop Pc's, Laptops, Servers and many more!</h2>
    </div>
    <div class='services-offered-grid'>
    <?php
// Check rows exists.
if( have_rows('services_offered') ):

    // Loop through rows.
    while( have_rows('services_offered') ) : the_row();

        // Load sub field value.
        $service_image = get_sub_field('service_image');
        $service_heading = get_sub_field('service_heading'); 
        $service_description = get_sub_field('service_description');

        // Do something, but make sure you escape the value if outputting directly...
        ?>

        <div>
            <img src='<?=$service_image?>' />
            <h2><?=$service_heading?></h2>
            <p><?=$service_description?></p>
            <a href='/servicios'>Learn More</a> 
        </div>
        <?php
    // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif;
?>  
    </div>
</section>

<section class='why-choose-us-section'>
    <div class='why-choose-us-inner-wrapper'>
        <div class='why-choose-us-reasons'>
            <div class='why-choose-us-reasons-heading'>
                <p>Why choose us?</p>
                <h2>We repair laptops and desktop computers for all major brands.</h2>
                <p>We specialize in repairing laptops and desktop computers from all major brands, offering fast, reliable, and professional services to get your devices back in perfect working condition. Whether it’s hardware issues, software troubleshooting, or performance optimization, our experienced technicians provide expert care tailored to your needs. Trust us to deliver quality solutions that extend the life of your devices and keep you connected.</p>
            </div>
            <div class='why-choose-us-tiles'>
                <?php
                // Check rows exists.
                if( have_rows('why_choose') ):

                    // Loop through rows.
                    while( have_rows('why_choose') ) : the_row();

                        // Load sub field value.
                        $choose_icon = get_sub_field('choose_icon');
                        $choose_heading = get_sub_field('choose_heading'); 
                        $choose_description = get_sub_field('choose_description');

                        // Do something, but make sure you escape the value if outputting directly...
                        ?>
                        <div class='why-choose-us-single-tile'>
                            <div>
                                <img src='<?=$choose_icon?>' />
                            </div>
                            <div class='why-choose-us-text-wrapper'>
                                <h3><?=$choose_heading?></h3>
                                <p><?=$choose_description?></p>
                            </div>
                        </div>
                        <?php
                    // End loop.
                    endwhile;
                // No value.
                else :
                    echo 'Nothing here yet.';
                endif;
                ?> 
            </div>
        </div>
        <div class='why-choose-us-technician-image-container'>
            <?$choose_technician_image = get_field('choose_technician_image');?>
            <img src='<?=$choose_technician_image;?>' />
        </div>
    </div>
</section>


<section class='supported-brands-section'>
    <div>
        <h2>Making your loved brands durable:</h2>
            <div class='supported-brands-grid'>
        <?php
// Check rows exists.
if( have_rows('supported_brands') ):

    // Loop through rows.
    while( have_rows('supported_brands') ) : the_row();

        // Load sub field value.
        $image_brand = get_sub_field('image_brand');
        // Do something, but make sure you escape the value if outputting directly...
        ?>

        <div>
            <img src='<?echo $image_brand;?>'/>
        </div>
        <?php
    // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif;
?>
        </div>
    </div>

</section>


<?php get_footer(); ?>