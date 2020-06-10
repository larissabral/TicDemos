<?php
/*
Plugin Name: Plugin Lari
Description: Plugin exemplo
Version: 0.0.1
Author: Larissa Bral
Licence: GPLv2 or later
*/

// if(! defined('ABSPATH')){
//	die;
// }

defined('ABSPATH') or die('Hey, you can\t access this file');

class pluginLari 
{
  //metodos

  function __construct(){
     add_action('init', array($this, 'custom_post_type'));
  }

  function activate(){

  }
  
  function deactivate(){
    
  }

  function unistall(){

  }

  function custom_post_type() {
    register_post_type('products', ['public' => true, 'label' => 'Products']);
  }



}

if( class_exists('pluginLari')){
  $lariPlugin = new pluginLari();
}

// activation
register_activation_hook(__FILE__, array($lariPlugin,'activate'));

// deactivation
register_deactivation_hook(__FILE__, array($lariPlugin,'deactivate'));


// unistall





//add_action('admin_menu', 'test_plugin_setup_menu');
 
//function test_plugin_setup_menu(){
//        add_menu_page( 'Test Plugin Page', 'Test Plugin', 'manage_options', 'test-plugin', 'test_init' );
//}
 
//function test_init(){
//       echo "<h1>Página de Exemplo</h1>";
//
//	echo "<br>";
//
//	echo "inserir html";
//}
 



