

<?php get_header(); ?>
        <div class="container blogPage">
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

                         while ($wp_query->have_posts()) {
                            $wp_query->the_post();
                        ?>

                        <div class="col-xs-2 blogDate blogPage hidden-xs">
                            <p class="month"><?php the_time('M'); ?></p>
                            <p class="date"><?php the_time('j'); ?></p>
                            <p class="year"><?php the_time('Y'); ?></p>
                        </div>

                        <article class="col-xs-10 blogPage">
                            <h1 class="blogTitle blogPage"><?php the_title(); ?></h1>
                            <div class="visible-xs-inline">
                                <p class="xs-date"><?php the_time('M j, Y'); ?> </p>
                            </div>
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

                            <nav class="nav-blog">
                                <div class="pager blogPage">
                                   <?php previous_post_link(); ?> || <?php next_post_link(); ?>
                                </div>
                            </nav>


                         </article>
                         <?php

                         }
                         ?>
                     </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>


