<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
function desactivando_RBMIC(){
$pagina=get_option("calculadora-imc-responsive-pageId");
wp_delete_post($pagina,true);
delete_option("calculadora-imc-responsive-pageId");
delete_option("color_RBMIC");
delete_option("borde_RBMIC");
delete_option("boton1_RBMIC");
delete_option("boton2_RBMIC");
delete_option("texto_boton__RBMIC");
delete_option("colorBorde_RBMIC");
delete_option("doctor_RBMIC");
//we remove the widget
unregister_widget('RBMIC_Widget');
}

register_deactivation_hook(RBMIC_ARCHIVO,'desactivando_RBMIC');