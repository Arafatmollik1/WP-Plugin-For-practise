<?php 
/**
 * @package 
 * 
 * 
 */
/* 
Plugin name: ArafatPlugin
Plugin URI: https://github.com/Arafatmollik1
Description: This is my first plugin
Author: Arafat Mollik
Text domain: practise-plugin-arafat
*/
defined('ABSPATH') or die('Error');

class ArafatPlugin{
    
    function register(){
         add_action( 'admin_enqueue_sripts', array($this,'enqueue') );
    }
    protected function create_post_type() {
     add_action( 'init', array( $this, 'custom_post_type' ) );
     }
   function activate(){
     require_once plugin_dir_path( __FILE__ ) . 'include/arafat-plugin-activate.php';
     ArafatPluginActivate::activate();
   } 
   

   function custom_post_type(){
        register_post_type( 'book', ['public'=> true, 'label'=> 'Books' ] );
   }
   function enqueue(){
        wp_enqueue_style( 'pluginStyle', plugins_url('/assets/mystyle.css', __FILE__) );
        wp_enqueue_script( 'pluginscript', plugins_url( '/assets/myscript.js', __FILE__ ) );
     }
}

    $arafatplugin = new ArafatPlugin();
    $arafatplugin-> register();

register_activation_hook( __FILE__, array($arafatplugin, 'activate') );
require_once plugin_dir_path( __FILE__ ) . 'include/arafat-plugin-deactivate.php';
register_deactivation_hook( __FILE__, array('ArafatPluginDeactivate', 'deactivate') );

?>