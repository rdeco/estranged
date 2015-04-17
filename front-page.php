<?php get_header(); ?>

    <div class="container-fluid indexSection">
        <div class="row">
	        <div class="col-lrg-10 col-lrg-offset-1">
	            <div id="cbp-so-scroller" class="cbp-so-scroller">
	             	<?php
				 		$args = array(
				 			'post_type' => 'portfolio',
				 			'posts_per_page' => 3,	
	                );
	                $portfolio = new WP_Query( $args );
	                    while( $portfolio->have_posts() ) :
	                        $portfolio->the_post();
	                        if ($portfolio->current_post % 2 == 0):
	                ?>
	
	                <section class="cbp-so-section">
	                    <article class="cbp-so-side cbp-so-side-left">
	                        <a href="<?php the_permalink(); ?>">
	                            <h2><?php the_title(); ?></h2>
	                            <p><?php the_excerpt(); ?></p>
	                        </a>
	                    </article>
	                    <figure class="cbp-so-side cbp-so-side-right">
	
	                        <?php
	                            if ( has_post_thumbnail() ) {
	                                echo the_post_thumbnail('portfolio-thumb');
	                        ?>
	                        <?php }
	                        else {  ?>
	                            <img src="<?php print IMAGES; ?>/alt-img_500x400.jpg" alt="img02">
	                        <?php } ?>
	
	                    </figure>
	                </section>
	
	                <?php else: ?>
	
	                <section class="cbp-so-section">
	                    <figure class="cbp-so-side cbp-so-side-left">
	
	                        <?php
	                            if ( has_post_thumbnail() ) {
	                                echo the_post_thumbnail('portfolio-thumb');
	                        ?>
	                        <?php }
	                        else {  ?>
	                            <img src="<?php print IMAGES; ?>/alt-img_500x350.jpg" alt="img02">
	                        <?php } ?>
	                    </figure>
	                    <article class="cbp-so-side cbp-so-side-right">
	                        <a href="<?php the_permalink(); ?>">
	                            <h2><?php the_title(); ?></h2>
	                            <p><?php the_excerpt();?></p>
	                        </a>
	                    </article>
	                </section>
	
	                   <?php endif; ?>
	                <?php endwhile; ?>
	            </div> <!-- .cbp-so-scroller -->
	        </div> <!-- .col-lrg-10 col-lrg-offset-1 -->
        </div> <!-- .row --->
    </div><!-- .container-fluid .indexSection -->
<?php get_footer(); ?>