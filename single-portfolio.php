<?php get_header(); ?>
    <div class="container">
    	<div class="row">
            <div class="col-xs-12  productPage">
	            <?php
					if(have_posts()) {
						while(have_posts()){
							the_post();				
	            ?>
	            <div class="row">
                    <section class="col-md-6 col-xs-12 single-portfolio">
                        <h1 class="productPageTitle" ><?php the_title(); ?></h1>
                        <div class="productInfo">
                            <ul class="productInfoUl">
	                            
	                            <li class="product-info-company"><span class="company">company:</span>
									<?php the_field('company_name'); ?>
                                </li>
                                <li class="product-info-website"> <span class="website">website:</span>                                  
									<?php the_field( 'website' ); ?>                                   
                                </li>
                                <li class="product-info-date"><span class="date">date:</span>
                                    <div class="date">
										<?php the_field( 'date' ); ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <hr class="style single-portfolio">
                        <?php the_content(); ?>
                        <!-- media share buttons, Go to www.addthis.com/dashboard to customize tools  -->
                        <div class="addthis_sharing_toolbox"></div>
                        <!-- end of media share buttons -->
                    </section>    
                    <article class="col-md-6 col-xs-12 single-portfolio">
	                    <div class="row">
			                <div class="col-md-6 col-xs-12 single-portfolio">
		                        <figure class="fig1">
									<?php the_field( 'images' ); ?>
		                        </figure>
			                </div>
	                    </div>
                    </article>
                </div> <!-- .row -->
                <?php
	                 } 
	                } 
	                ?>
            </div> <!-- .col-xs-12 .productPage -->
        </div> <!-- .row -->            
    </div> <!-- .container -->
    <nav class="pagination">
        <?php previous_post_link(); ?>  
        	<a href="<?php bloginfo('url'); ?>/?p=51"><i class="fa fa-th-large"></i></a>
        <?php next_post_link(); ?>
    </nav>
<?php get_footer(); ?>

