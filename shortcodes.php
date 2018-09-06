<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//shortcodes
function formulario(){
$action=get_the_permalink(get_option('calculadora-imc-responsive-pageId'));
include("templates/main.php");
}
add_shortcode('show_RBMIC','formulario');

function RBMIC_resultados(){

include("templates/results.php");
}

add_shortcode('RBMIC_resultados_S','RBMIC_resultados');