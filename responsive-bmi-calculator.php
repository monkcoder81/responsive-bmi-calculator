<?php

/**
 * Plugin Name: Responsive BMI Calculator
 * Plugin URI: https://github.com/monkcoder81/Responsive-BMI-calculator
 * Description: A BMI (Body Mass Index) calculator free and easy to use. It is responsive and adjusts to any size of screen. The user receives his BMI and medical advices according to the World Health Organization. You can insert it using a widget or a shortcode. You can customize its appearence at the settings page.
 * Version: 1.0
 * Author: Javier Guelbenzu Solsona
 * Author URI: http://www.guelbetech.com
 *Text Domain: Responsive-BMI-Calculator
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 //constantes
define('RBMIC_ARCHIVO',__FILE__);
define('RBMIC_URL', plugin_dir_url( __FILE__ ));

//cargamos internacionalización
load_textdomain('Responsive-BMI-Calculator',plugin_dir_path( __FILE__ ).'/languages/Responsive-BMI-Calculator-'.get_locale().'.mo');

//modulos
include( plugin_dir_path( __FILE__ ).'activacion.php');
include( plugin_dir_path( __FILE__ ).'desactivacion.php');
include( plugin_dir_path( __FILE__ ).'admin.php');
include( plugin_dir_path( __FILE__ ).'shortcodes.php');
include( plugin_dir_path( __FILE__ ).'widget.php');
include( plugin_dir_path( __FILE__ ).'styles.php');

//creamos los valores por defecto de las opciones
if(get_option('color_RBMIC')=="") update_option('color_RBMIC','#c0c0c0');
if(get_option('borde_RBMIC')=="") update_option('borde_RBMIC','#808080');
if(get_option('texto_RBMIC')=="") update_option('texto_RBMIC','#000000');
if(get_option('boton1_RBMIC')=="") update_option('boton1_RBMIC','#3D94F6');
if(get_option('boton2_RBMIC')=="") update_option('boton2_RBMIC','#1E62D0');
if(get_option('texto_boton__RBMIC')=="") update_option('texto_boton__RBMIC','#FFFFFF');
if(get_option('colorBorde_RBMIC')=="") update_option('colorBorde_RBMIC','#337FED');
if(get_option('doctor_RBMIC')=="") update_option('doctor_RBMIC','1');

?>
