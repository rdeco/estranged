<?php	
	/* 
		Template Name: Contact Page
	*/
	get_header(); ?>		  	
	  	<!-- start of front page content-->			  	
	  	<section class="contact col-sm-6 col-sm-offset-3">   		
			<div class="row">        
					<?php
						if (have_posts()){
							while(have_posts()){
								the_post();
					?>
							<div class="contact-content">								
								<?php the_content(); ?>
							</div>
					<?php				
							}
						}
					?>
			</div><!-- .row -->
	  	</section><!-- .col-xs-12 -->		
<?php get_footer(); ?>