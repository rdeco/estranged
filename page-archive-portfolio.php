<?php
	/*
		Template Name: Portfolio
	*/
	
	get_header(); ?>
    <section class="container portfolioSection">
        <div class="row"> 
	        <h1 class="archiveTitle"><?php the_title(); ?></h1>    
	        <div class="col-xs-12 portfolioPage">       
		        <?php	            
	                $wp_query = new WP_Query();
	                $wp_query->query('posts_per_page=6&post_type=portfolio'.'&paged='.$paged);
	
	                while ($wp_query->have_posts()) {
	                    $wp_query->the_post();
	            ?>        
	            <div class="view view-fifth">
	                <?php the_post_thumbnail('large'); ?>
	                <div class="mask">
	                    <h2><?php the_title(); ?></h2>
	                    <?php the_excerpt(); ?> 
	                    <a href="<?php the_permalink(); ?>" class="info">See Details</a>
	                </div>
	            </div> <!-- .view .view-fifth -->
	            <?php
	                }
	            ?>
	        </div> <!-- .col-xs-12 .portfolioPage -->
	    </div>
	</section> <!-- .container .portfolioSection -->
    <?php if (show_posts_nav()) : ?>
        <nav class="pagination">
	        <?php previous_posts_link('&laquo; Previous Page'); ?>  
	        	<a href="<?php bloginfo('url'); ?>/?p=51"><i class="fa fa-th-large"></i></a>
	        <?php next_posts_link('Next Page  &raquo;'); ?>
		</nav>
    <?php endif; ?>
<?php get_footer(); ?>