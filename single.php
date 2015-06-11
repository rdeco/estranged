<?php get_header(); ?>
    <section class="container blogPage">
	    <div class="row">
            <div class="col-lrg-2 col-lrg-offset-10 col-xs-12 blogArchivePage">
                <aside>
                    <?php get_sidebar('estranged_sidebar'); ?>
                </aside>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 blogSinglePage">
                <div class="row blogPage">
                    <?php
                        if(have_posts()) {
	                        while(have_posts()){
		                        the_post();
                    ?>
                    <div class="col-xs-2 blogDate blogPage hidden-xs">
                        <p class="month"><?php the_time('M'); ?></p>
                        <p class="date"><?php the_time('j'); ?></p>
                        <p class="year"><?php the_time('Y'); ?></p>
                    </div>

                    <article class="col-xs-8 blogPage">
                        <h1 class="blogTitle blogPage"><?php the_title(); ?></h1>
                        <div class="visible-xs-inline">
                            <p class="xs-date"><?php the_time('M j, Y'); ?> </p>
                        </div>
						<p class="author-name">Written By: <span class="blog-author-name"><?php the_author(); ?></span></p>
                        <div class="blogPage tags">
                            <span class="glyphicon glyphicon-tags"></span>
                            <ul class="blogTags blogPage">
                                 <?php the_tags('   •   ', '   •   '); ?>
                            </ul>
                        </div>
                        <p class="blogText blogPage"><?php the_content(); ?></p>
                        <hr class="style single-blog">
                        <div class="comments blogPage">
                            <?php comments_template('comments.php'); ?>
                        </div>
                     </article>                  
                     <?php
					 	}
                     }
                     ?>
                </div><!-- .row .blogPage -->
            </div><!-- .col-xs-12 .blogSinglePage -->
			<nav class="pagination">
				<?php previous_post_link(); ?>
					<a href="<?php bloginfo('url'); ?>/?p=6"><i class="fa fa-th-large"></i></a>
				<?php next_post_link(); ?>							
			</nav>
        </div><!-- .row -->
    </section><!-- .container .blogPage -->
<?php get_footer(); ?>


