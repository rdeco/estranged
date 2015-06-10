<?php get_header(); ?>
    <section class="container">
    	<div class="row">
            <div class="col-xs-12  productPage">
	            <?php
					if(have_posts()) {
						while(have_posts()){
							the_post();				
	            ?>
	            <div class="row">
                    <article class="col-md-6 col-xs-12 single-portfolio">
                        <h1 class="productPageTitle" ><?php the_title(); ?></h1>
                        <div class="productInfo">
                            <ul class="productInfoUl">
                                <li class="productInfo1 website"> <span class="website">website:</span>                                  
									<?php the_field( 'website' ); ?>                                   
                                </li>
                                <li class="productInfo2 company"><span class="company">company:</span>
									<?php the_field('company_name'); ?>
                                </li>
                                <li class="productInfo3"><span class="date">date:</span>
                                    <div class="date">
										<?php the_field( 'date' ); ?>
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
									<?php the_field( 'images' ); ?>
		                        </figure>
			                </div>
	                    </div>
                    </div>
                </div> <!-- .row -->
                <?php
	                 } 
	                } 
	                ?>
            </div> <!-- .col-xs-12 .productPage -->
        </div> <!-- .row -->            
    </section> <!-- .container -->
    <nav class="archive-portfolio pagination">
        <?php previous_post_link(); ?>  
        	<a href="<?php bloginfo('url'); ?>/?p=51"><i class="fa fa-th-large"></i></a>
        <?php next_post_link(); ?>
    </nav>
<?php get_footer(); ?>

