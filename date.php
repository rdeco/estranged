
<?php get_header(); ?>
    <div class="container dateArchive">
	    <div class="row">
            <div class="col-lrg-2 col-lrg-offset-10 col-xs-12 blogArchivePage">
                <aside>
                    <?php get_sidebar('estranged_sidebar'); ?>
                </aside>
            </div>
        </div>
        				
		<div class="row">		
			<div class="col-xs-12 dateArchive">
				<p class="catHeader">All blogs written in: <?php single_month_title(' '); ?></p>
				<hr class="catHR">	
				<div class="blogArchive">
					<?php
						if (have_posts()) {
							while(have_posts()) {
							the_post();
					?>
					<div class="row">
		                <div class="col-sm-2 blogDate datePage">
		                    <p class="month"><?php the_time('M'); ?></p>
		                    <p class="date"><?php the_time('j'); ?></p>
		                    <p class="year"><?php the_time('Y'); ?></p>
		                </div>
		                
		                <article class="col-sm-6 blogArticle">
		                	<h1 class="blogTitle"><?php the_title(); ?></h1>
		                    <a class="blogArchive" href="<?php the_permalink(); ?>">
		                        <p class="blogText"><?php the_excerpt(); ?></p>
		                    </a>
		                    <hr class="style">
		                    <div class="glyphicon tag">
		                        <span class="glyphicon glyphicon-tags"></span>
		                        <ul class="blogTags">
		                             <?php the_tags('   •   ', '   •   '); ?>
		                        </ul>
		                    </div>
		                    <div class="comments blogArchive">
		                       Comments: <span class="badge"><?php echo comment_count('0'); ?></span>
		                    </div>
		                </article>
		                <figure class="col-sm-4 blogArchive">	                  
	                        <?php
	                            if ( has_post_thumbnail() ) {
	                                  echo the_post_thumbnail('blog-thumb');
	                        ?>
	                        <?php }
	                        else {  ?>
	                        	<img src="<?php print IMAGES; ?>/alt-img_350x350.jpg" alt="img02">
	                        <?php } ?>	                  
		                </figure>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div> <!-- .col-xs-12 .dateArchive -->
		</div> <!-- .row -->
		<?php if (show_posts_nav()) : ?>
			<nav  class="nav-blog-archive">
				<div class="pager blogArchive">
					<?php previous_posts_link('&laquo; Previous Posts') ?>||<?php next_posts_link('More Posts &raquo;') ?>
				</div>
			</nav>
		<?php $wp_query = null; $wp_query = $temp;?>
		<?php endif; ?>
    </div>
<?php get_footer(); ?>


