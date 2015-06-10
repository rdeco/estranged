<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/imgs");

require_once('theme-options.php');
add_theme_support( 'custom-header' );
$args = array(
	'width'         => 2000,
	'height'        => 500,
	'default-image' => get_template_directory_uri() . '/imgs/headerTop.jpg',
);
add_theme_support( 'custom-header', $args );
add_theme_support( 'post-thumbnails' );

/**
 * Enqueue scripts & stylesheets
 * -----------------------------
 */
   
function estranged_style() {
	wp_enqueue_style ('main_css', get_template_directory_uri().'/css/main.css' );
	wp_enqueue_style ('bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style ('bootstrap_theme_css', get_template_directory_uri().'/css/bootstrap-theme.min.css' );
	wp_enqueue_style ('googlefonts_css', 'http://fonts.googleapis.com/css?family=Questrial' );	
	wp_enqueue_style ('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css' );	
}
add_action('wp_enqueue_scripts', 'estranged_style');

function estranged_scripts() {

    wp_register_script ('estranged-classie', get_template_directory_uri().'/js/classie.js', false, '201518', true);
    wp_register_script ('estranged-modernizr', get_template_directory_uri().'/js/modernizr.custom.js', false, '201518', true);
    wp_enqueue_script('estranged-animated-header', get_template_directory_uri().'/js/cbpAnimatedHeader.js', array('estranged-classie', 'estranged-modernizr'), '201518', true);
    wp_enqueue_script('estranged-bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', false, '201518', false);
    wp_enqueue_script('estranged-main-js', get_template_directory_uri().'/js/main.js', false, '201518', false);
    wp_enqueue_script('pinit', "//assets.pinterest.com/js/pinit.js", false, '201518', false);
    wp_enqueue_script('add-this', "//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-508cf07b372297e2", false, '201518', false);

    if (is_front_page()) {
        wp_enqueue_script('estranged-scroller', get_template_directory_uri().'/js/cbpScroller.js', array('estranged-modernizr', 'estranged-classie'), '201518', true);
        wp_enqueue_script('my-scroller', get_template_directory_uri().'/js/myscroller.js', array('estranged-scroller'), '201518', true);
    }

}
add_action('wp_enqueue_scripts', 'estranged_scripts');

/**
 * Register Navigation Menus
 * -------------------------
 */

function estranged_register_menu(){
    register_nav_menus(
    	array( 
    		'header-menu' =>  __('Main Navigation Menu'),
    		
		)
	);	
}
add_action('init', 'estranged_register_menu');

/**
 * Register Sidebar
 * -----------------
 */

function estranged_sidebar() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar',
        'description' => __( 'primary sidebar', 'estranged-sidebar' ),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
}
add_action( 'widgets_init', 'estranged_sidebar' );

/**
 * Register featured image size
 * ----------------------------
 */

add_image_size('blog-thumb', 350, 350, true);
add_image_size('archive-portfolio-thumb', 500, 350, true);

/**
* Adds support for pagination
* ---------------------------
*/

function pagination($pages = '', $range = 50)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

/**
 * If more than one page exists, return TRUE.
 */
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

/**
 * Starts support for comment count
 * ---------------------------------
 */

 add_filter('get_comments_number', 'comment_count', 0);
 function comment_count( $count ) {
     if ( ! is_admin() ) {
     global $id;
     $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
     return count($comments_by_type['comment']);
     } else {
     return $count;
     }
 }

/**
 * Starts support for excerpt character count
 * ------------------------------------------
 */

function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
* Starts support for cpt (portfolio) admin panel
* ----------------------------------------------
*/

//'portfolio' is the registered post type name
add_filter( 'manage_portfolio_posts_columns', 'portfolio_cpt_columns' );
add_action('manage_portfolio_posts_custom_column', 'portfolio_cpt_custom_column', 10, 2);

function portfolio_cpt_columns($columns) {
    $columns['id'] = 'Post ID';
    $columns['thumbnail'] = 'Featured Image';
    return $columns;

}
add_image_size( 'product-thumb', 100, 100, true );
function portfolio_cpt_custom_column($column_name, $id) {
         global $wpdb;
         switch ($column_name) {
             case 'id':
                 echo $id;
                     break;

             case 'thumbnail':
                 echo the_post_thumbnail( 'product-thumb' );
                     break;
         } // end switch
}

/**
* Starts support for posts admin panel
* ----------------------------------------------
*/

//'posts' is regular posts
add_filter( 'manage_posts_columns', 'post_columns' );
add_action('manage_posts_custom_column', 'post_custom_column', 10, 2);

function post_columns($columns) {
    $columns['id'] = 'Post ID';
    return $columns;

}

function post_custom_column($column_name, $id) {
         global $wpdb;
         switch ($column_name) {
            case 'id':
                 echo $id;
                     break;

         } // end switch
}

/**
* Starts support for posts admin panel
* ----------------------------------------------
*/


/**
 * @package FixImageMargins
 * @author Justin Adie
 * @version 0.1.0
 */
/*
Plugin Name: FixImageMargins
Plugin URI: #
Description: removes the silly 10px margin from the new caption based images & can change hardocded inline width
Author: Justin Adie
Version: 0.1.0
Author URI: http://rathercurious.net
*/
class fixImageMargins{
    public $xs = -350; //change this to change the amount of extra spacing

    public function __construct(){
        add_filter('img_caption_shortcode', array(&$this, 'fixme'), 10, 3);
    }
    public function fixme($x=null, $attr, $content){

        extract(shortcode_atts(array(
                'id'    => '',
                'align'    => 'alignnone',
                'width'    => '',
                'caption' => ''
            ), $attr));

        if ( 1 > (int) $width || empty($caption) ) {
            return $content;
        }

        if ( $id ) $id = 'id="' . $id . '" ';

    return '<div ' . $id . 'class="wp-caption ' . $align . '" style="width: ' . ((int) $width + $this->xs) . 'px">'
    . $content . '<p class="wp-caption-text">' . $caption . '</p></div>';
    }
}
$fixImageMargins = new fixImageMargins();

?>