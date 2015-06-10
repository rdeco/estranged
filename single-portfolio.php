<?php get_header(); ?>
    <div class="container">
    	<div class="row">
            <div class="col-xs-12  productPage">
	            <?php

                while ($wp_query->have_posts()) {
                    $wp_query->the_post();
	            ?>
	            <!-- <pre><?php print_r($wp_query); ?></pre> -->
	            <div class="row">
                    <article class="col-md-6 col-xs-12 single-portfolio">

                        <h1 class="productPageTitle" ><?php the_title(); ?></h1>
                        <div class="productInfo">
                            <ul class="productInfoUl">
                                <li class="productInfo1"> <span class="website">website:</span>
                                    <a class="website" href="#">
                                        <?php
                                            $postmeta = get_post_meta($post->ID);

                                            if ( isset($postmeta['meta_box_website_field'][0]) ) {
                                                echo $postmeta['meta_box_website_field'][0];
                                            }
                                        ?>
                                     </a>
                                </li>

                                <li class="productInfo2"><span class="company">company:</span>
                                    <a class="company" href="#">
                                        <?php
                                            $postmeta = get_post_meta($post->ID);

                                            if ( isset($postmeta['meta_box_company_field'][0]) ) {
                                                echo $postmeta['meta_box_company_field'][0];
                                            }
                                        ?>
                                    </a>
                                </li>
                                <li class="productInfo3"><span class="date">date:</span>
                                    <div class="date">
                                    <?php
                                        $postmeta = get_post_meta($post->ID);

                                        if ( isset($postmeta['meta_box_date_field'][0]) ) {
                                            echo $postmeta['meta_box_date_field'][0];
                                        }
                                    ?>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <hr class="style single-portfolio">

                        <p class="productText"><?php the_content(); ?>  </p>

                        <!-- media share buttons, Go to www.addthis.com/dashboard to customize tools  -->
                        <div class="addthis_sharing_toolbox"></div>
                        <!-- end of media share buttons -->
                    </article>    

                    <div class="col-md-6 col-xs-12 single-portfolio">
	                    <div class="row">
			                <div class="col-md-6 col-xs-12 single-portfolio">
		                        <figure class="fig1">
		                            <?php
		                                if ( has_post_thumbnail() ) {
		                                    echo the_post_thumbnail('portfolio-thumb');
		                            ?>
		                            <?php }
		                            else {  ?>
		                                <img src="<?php print IMAGES; ?>/alt-img_500x400.jpg" alt="img02">
		                            <?php } ?>
		                        </figure>
			                </div>
	                    </div>
	                    <div class="row">
			                <div class="col-md-6 col-xs-12 single-portfolio">
		                        <figure class="fig2">
		                            <?php
		                                if (class_exists('MultiPostThumbnails')) :
		                                    MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL,  'secondary-portfolio-thumb');
		                                endif;
		                            ?>
		                        </figure>
			                </div>
	                    </div>
	                    <div class="row">
			                <div class="col-md-6 col-xs-12 single-portfolio">
		                        <figure class="fig3">
		                           <?php
		                                if (class_exists('MultiPostThumbnails')) :
		                                    MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-image', NULL,  'third-portfolio-thumb');
		                                endif;
		                            ?>
		                        </figure>
			                </div>
	                    </div>
	                    <div class="row">
			                <div class="col-md-6 col-xs-12 single-portfolio">	                    
		                        <figure class="fig4">
		                           <?php
		                                if (class_exists('MultiPostThumbnails')) :
		                                    MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'fourth-image', NULL,  'fourth-portfolio-thumb');
		                                endif;
		                            ?>
		                        </figure>
			                </div>
	                    </div>
	                    <div class="row">
			                <div class="col-md-6 col-xs-12 single-portfolio">                        
				                <figure class="fig5">
		                           <?php
		                                if (class_exists('MultiPostThumbnails')) :
		                                    MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'fifth-image', NULL,  'fifth-portfolio-thumb');
		                                endif;
		                            ?>
		                        </figure>
			                </div>
	                    </div>
                    </div>
                </div> <!-- .col-sm-6 .col-xs-12 -->
                <?php }  ?>
            </div> <!-- .col-xs-12 .productPage -->
        </div> <!-- .row -->            
    </div> <!-- .container -->
    <nav class="portfolio pagination">
        <?php previous_post_link(); ?>  
        	<a href="<?php bloginfo('url'); ?>/?p=51"><i class="fa fa-th-large"></i></a> 
        <?php next_post_link(); ?>   
    </nav>
    
    <?php if (show_posts_nav()) : ?>
        <nav class="archive-portfolio pagination">
            <ul class="pager productPage">
                <?php previous_post_link(); ?>  
                	<a href="<?php bloginfo('url'); ?>/?p=51"><i class="fa fa-th-large"></i></a>
                <?php next_post_link(); ?>
            </ul>
        </nav>
    <?php endif; ?>

<?php get_footer(); ?>

