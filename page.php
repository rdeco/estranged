<?php
/*
* Template Name: General Page
*/
?>

<?php get_header(); ?>
        <div class="container aboutPage">
	        <div class="row">
		        <div class="col-xs-12 archiveTitle">
		        	<h1><?php wp_title(' '); ?></h1>
		        </div>
	        </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-xs-12 aboutPage">       

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
                </div> <!-- .col-sm-10 .col-sm-offset-1 .col-xs-12 .aboutPage -->
            </div><!-- .row -->
        </div> <!-- .container .aboutPage -->
<?php get_footer(); ?>
