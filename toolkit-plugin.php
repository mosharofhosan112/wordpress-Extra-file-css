<?php
/*
Plugin Name: Crazyland Toolkit

*/ 

  // Exit if accessed directly
  if ( ! defined( 'ABSPATH' ) ) {
    exit;
  }


  //Define
  define( 'crazyland_ACC_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__ ) ) . '/' );
  define( 'crazyland_ACC_PATH', plugin_dir_path(__FILE__) ) ; 

 
 // Print sortcode in widgets
  add_filter('widget_text', 'do_shortcode');


 //Loading VC addons  Call Section
 require_once( crazyland_ACC_PATH . 'vc-addons/vc-blocks-load.php');

  // Theme shortcodes  
   require_once( crazyland_ACC_PATH . 'theme-shortcodes/service-shortcode.php' );

// Shortcodes depended on Visul Composer
  include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
   if (is_plugin_active('ja_composer/js_composer.php')){
     //  require_once ( crazyland_ACC_PATH . 'theme-shortcodes/staff-shortcode.php ');
   }


  // Registering crazyland Toolkit files
   function crazyland_toolkit_files(){
   

   wp_enqueue_style('owl-carousel', plugin_dir_url( __FILE__ ) .'assets/css/owl.carousel.min.css');
   wp_enqueue_style('crazyland-toolkit', plugin_dir_url( __FILE__ ) .'assets/css/crazyland-toolkit.css');
   wp_enqueue_script('owl-carousel', plugin_dir_url( __FILE__ ) .'assets/js/owl.carousel.min.js', array('jquery'),   
    '20120206', true );

   }
add_action('wp_enqueue_scripts', 'crazyland_toolkit_files');

 

