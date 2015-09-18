<?php get_header(); ?>
    <div class="container aboutPage">
        <div class="row">
            <article class="col-xs-8 col-xs-offset-2 aboutPage">    
	            <h1 class="about-title"><?php the_title(); ?></h1>   
                <?php
                if (have_posts()) {
                    while(have_posts()) {
                        the_post();
                ?>
                <p class="aboutText">
                   <?php the_content(); ?>
                </p>

                 <?php
                     }
                 }
                 ?>
            </article> <!-- .col-sm-10 .col-sm-offset-1 .col-xs-12 .aboutPage -->
        </div><!-- .row -->
    </div> <!-- .container .aboutPage -->
<?php get_footer(); ?>
