<?php
/*
Template Name: Home Template
*/

get_header(); ?>

<!-- Section: Page Header -->
<?php echo do_shortcode("[huge_it_slider id='3']"); ?>

<section class="section-page-header page">
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
