<?php
/*
Template Name: Home Template
*/

get_header(); ?>

<!-- Section: Page Header -->
<?php echo do_shortcode("
[owl-carousel 
category='homepage-carousel' 
autoPlay='true' 
items='1' 
itemsDesktop='1920,1' 
itemsDesktopSmall='979,1' 
itemsTablet='768,1' 
itemsMobile='480,1' 
baseClass='slider home-slider'
]
"); ?>

<section class="section-page-header page hide">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
           <!--  <div class="col-md-12">
                <?php the_title( '<h1 class="title">', '</h1>' ); ?>
                <?php if ( function_exists( 'the_subtitle' ) ) { ?>
                <div class="subtitle"><?php the_subtitle();?></div>
                <?php }?>
            </div> -->

            <!-- /Page Title -->
            
        </div>
    </div>
</section>
<!-- /Section: Page Header -->


<!-- Main -->
<main class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <h2><?php the_field('home_description_section_title'); ?></h2>
                 <p><?php the_field('home_description_section_desc'); ?></p>
            </div>
        </div>
    </div>
</main>
<!-- /Main -->
<?php

get_footer();
