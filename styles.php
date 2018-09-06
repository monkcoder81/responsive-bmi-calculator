<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//css 
function calculadora_imc_css_dinamico(){
echo'<link rel="stylesheet" type="text/css" href="'.RBMIC_URL.'css/styles.css">';

$base=get_option('color_RBMIC'); 
$border=get_option('borde_RBMIC'); 
$texto=get_option('texto_RBMIC'); 
$boton1=get_option('boton1_RBMIC'); 
$boton2=get_option('boton2_RBMIC'); 
$colorBoton=get_option('texto_boton__RBMIC');
$colorBorde=get_option('colorBorde_RBMIC');
echo'
<style type="text/css">
.calculadora-imc-responsive-contenedor{
background-color:'.$base.';
border-color:'.$border.';
color:'.$texto.';
}
.calculadora-imc-responsive-contenedor h3, .calculadora-imc-responsive-contenedor select, .calculadora-imc-responsive-contenedor input {
color:'.$texto.';
}
.boton_RBMIC {
   background: '.$boton1.';
   background-image: -webkit-linear-gradient(top, '.$boton1.', '.$boton2.');
   background-image: -moz-linear-gradient(top, '.$boton1.', '.$boton2.');
   background-image: -ms-linear-gradient(top, '.$boton1.', '.$boton2.');
   background-image: -o-linear-gradient(top, '.$boton1.', '.$boton2.');
   background-image: linear-gradient(to bottom, '.$boton1.', '.$boton2.');
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   color: '.$colorBoton.';
   font-family: Open Sans;
   font-size: 21px;
   font-weight: 100;
   padding: 11px;
   text-shadow: -4px 1px 20px #000000;
   border: solid '.$colorBorde.' 1px;
   text-decoration: none;
   display: inline-block;
   cursor: pointer;
}

.boton_RBMIC:hover {
   background: '.$boton2.';
   background-image: -webkit-linear-gradient(top, '.$boton2.', '.$boton1.');
   background-image: -moz-linear-gradient(top, '.$boton2.', '.$boton1.');
   background-image: -ms-linear-gradient(top, '.$boton2.', '.$boton1.');
   background-image: -o-linear-gradient(top, '.$boton2.', '.$boton1.');
   background-image: linear-gradient(to bottom, '.$boton2.', '.$boton1.');
   text-decoration: none;
}
</style>
';
}
add_action('wp_head','calculadora_imc_css_dinamico');