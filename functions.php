<?php
define(’WP_CACHE’, false);
remove_action('wp_head','wp_generator');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','rsd_link');

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 100, 100, true );
	add_image_size( 'big', 600, 300, true );
	add_theme_support('menus');
	register_nav_menu( 'header menu', __( 'Header' ) );
	
}
if ( function_exists('register_sidebar') )
    register_sidebar(array(
    	'name' => 'Sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

function head_js() {
	 wp_deregister_script('jquery'); 
	 wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"), false, ''); 
	 wp_enqueue_script('jquery');
};
define('HEADER_TEXTCOLOR', '000000');
define('HEADER_IMAGE', '%s/images/default_header.jpg'); // %s is the template dir uri
define('HEADER_IMAGE_WIDTH', 960); // use width and height appropriate for your theme
define('HEADER_IMAGE_HEIGHT', 200);
function header_style() {
    ?><style type="text/css">
        #header {
            background: url(<?php header_image(); ?>);
			color:#<?php header_textcolor(); ?>;
        }
		#header h1 a{color:#<?php header_textcolor(); ?>;}
    </style><?php
}
// gets included in the admin header
function admin_header_style() {
    ?><style type="text/css">
        #headimg {
            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
        }
    </style><?php
}

//add_action('init','head_js');
add_custom_image_header('header_style', 'admin_header_style');

function credits(){
	echo 'Template Minima by <a href="http://thibaultmilan.com" title="Developpement Web Metz Nancy Lorraine">Thibault Milan</a>';
	}
?>