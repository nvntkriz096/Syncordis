<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . '/assets/css/syncordis.css', array( 'blankslate-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

defined( 'CHLD_THM_CFG_IGNORE_PARENT' ) or define( 'CHLD_THM_CFG_IGNORE_PARENT', TRUE );
// END ENQUEUE PARENT ACTION

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/*Navigation Menus*/
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
  /*End*/

function add_scripts()
{
    /*****CSS******/
    //Bootstrap
   wp_register_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', false,'1.1','all');
   wp_enqueue_style( 'bootstrap');
    //Bootstrap Icon
   wp_register_style('bootstrap-icon', get_stylesheet_directory_uri() . '/assets/css/bootstrap/bootstrap-icons.min.css', false,'1.1','all');
   wp_enqueue_style( 'bootstrap-icon');
   //Aos Animation
   wp_register_style('aos', get_stylesheet_directory_uri() . '/assets/css/aos.min.css', false,'1.1','all');
   wp_enqueue_style( 'aos');

    /******JS*****/

    wp_register_script('JQ', get_stylesheet_directory_uri() . '/assets/js/jquery-3.6.1.min.js', array( 'jquery' ));
   wp_enqueue_script( 'JQ');
    //Bootstrap
   wp_register_script('bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', array( 'jquery' ));
   wp_enqueue_script( 'bootstrap');
   //Aos Animation
   wp_register_script('aos', get_stylesheet_directory_uri() . '/assets/js/aos.js',  array( 'jquery' ));
   wp_enqueue_script( 'aos');
    //Bootstrap Icon
    wp_register_script('custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', array( 'jquery' ));
    wp_enqueue_script( 'custom');
}
add_action('wp_enqueue_scripts', 'add_scripts');
/**ACF style**/
function my_acf_admin_head() {
    ?>
    <style type="text/css">
        .image_icon { height:30px; }
    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');

/**Body Tag**/
add_action('wp_body_open', 'add_code_on_body_open');
function add_code_on_body_open() {
    echo
    '<script>
    //calling Aos animate
    AOS.init({
        offset: 100,
        duration: 1200,
        delay: 300,
        easing: "ease",
        once: true,
    })
    </script>';
}
