<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
function RBMIC_activando(){
 //creamos la p?gina de resultados
 $id=RBMIC_crear_pagina_resultados();
 //guardamos el id de la pagina en options
 update_option("calculadora-imc-responsive-pageId",$id);
 }
function RBMIC_crear_pagina_resultados(){
$new_page = array(
                'post_type' => 'page',
                'post_title' => __('BMI Results',"Responsive-BMI-Calculator"),
                'post_content' => '[RBMIC_resultados_S]',
                'post_status' => 'publish',
                'post_author' => 1,
        );
		$new_page_id = wp_insert_post($new_page);
	return $new_page_id;	
}
register_activation_hook(RBMIC_ARCHIVO,'RBMIC_activando');
?>