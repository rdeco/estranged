<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?> | <?php wp_title(); ?> </title>

        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
        <header class="cbp-af-header">
	        <img  class="header-img" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
            <div class="header opacity">
                <div class="cbp-af-inner">
                    <?php $logo= get_option('estranged_logo', IMAGES.'/logo.png'); ?>
                    <a class="logo" href="<?php bloginfo('url'); ?>">
                        <img class="logo" src="<?php print $logo; ?>" alt="<?php bloginfo('name'); ?>" />
                    </a>                    
                    <div class="profilePic hidden-xs hidden-sm ">
                        <img class="header-gravatar" src="<?php print IMAGES; ?>/profilePic.png" class="profilePic" >

                    </div>
                    
                    <nav>	                    
                        <?php
	                        $args = array(
		                        'menu' => 'header-menu',                       
	                        );
	                        wp_nav_menu($args);
	                                          
                        ?>
                    </nav>
                </div> <!-- .cbp-af-inner -->
            </div> <!-- .header .opacity -->
        </header>
