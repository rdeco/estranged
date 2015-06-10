<?php get_header(); ?>			  	
	<!-- start of front page content-->			  	
	<section class="page-img col-xs-12">     		
		<div class="row">
			<div class="page col-md-6 col-md-offset-6">
				<?php 
					if(have_posts()) {
						while(have_posts()) {
							the_post();
				?>
				<div class="row">
					<h1 class="page-h1">
						<?php the_title(); ?>
					</h1>
					<div class="page-para">
						<?php the_content(); ?>	 	
					</div>
				</div>
				<?php
						}	
					}	
				?>
				
			</div>
		</div><!-- .row -->
	</section><!-- .col-xs-12 -->
<?php get_footer(); ?>