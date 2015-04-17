<?php get_header(); ?>
    <div class="container portfolioSection">
        <div class="row">
	        <div class="col-xs-12 archiveTitle">
	        
	        	<h1>Portfolio</h1>
	        </div>
        </div>
        <div class="col-xs-12 portfolioPage">            
            <?php
                $wp_query = new WP_Query();
                $wp_query->query('posts_per_page=6&post_type=portfolio'.'&paged='.$paged);

                while ($wp_query->have_posts()) {
                    $wp_query->the_post();
            ?>
            <div class="view view-fifth">
                <?php
                    if ( has_post_thumbnail() ) {
                        echo the_post_thumbnail('archive-portfolio-thumb');
                ?>
                <?php }
                else {  ?>
                    <img src="<?php print IMAGES; ?>/alt-img_350x500.jpg" alt="img02">
                <?php } ?>
                <div class="mask">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?> </p>
                    <a href="<?php the_permalink(); ?>" class="info">See Details</a>
                </div>
            </div> <!-- .view .view-fifth -->
            <?php
                }
            ?>
        </div> <!-- .col-xs-12 .portfolioPage -->
    </div> <!-- .container .portfolioSection -->
    <?php if (show_posts_nav()) : ?>
        <nav class="archive-portfolio pagination">
            <ul class="pager productPage">
                <?php previous_posts_link('Previous Page') ?>  ||  <?php next_posts_link('Next Page') ?>
            </ul>
        </nav>
    <?php endif; ?>
<?php get_footer(); ?>

