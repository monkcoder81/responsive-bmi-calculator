<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//a�adir submenus
function RBMIC_add_submenu(){
add_options_page( "Settings",__("BMI Calculator","Responsive-BMI-Calculator"),"manage_options", RBMIC_ARCHIVO, 'RBMIC_page_submenu');
add_action( 'admin_init', 'RBMIC_register_settings' );
}
add_action( 'admin_menu', 'RBMIC_add_submenu' );
function RBMIC_register_settings() {
	//register our settings
	register_setting( 'RBMIC_settings-group', 'color_RBMIC' );
	register_setting( 'RBMIC_settings-group', 'borde_RBMIC' );
	register_setting( 'RBMIC_settings-group', 'texto_RBMIC' );
	register_setting( 'RBMIC_settings-group', 'boton1_RBMIC' );
	register_setting( 'RBMIC_settings-group', 'boton2_RBMIC' );
	register_setting( 'RBMIC_settings-group', 'texto_boton__RBMIC' );
	register_setting( 'RBMIC_settings-group', 'colorBorde_RBMIC' );
	register_setting( 'RBMIC_settings-group', 'doctor_RBMIC' );
}
function RBMIC_page_submenu(){
$base=get_option('color_RBMIC');
$border=get_option('borde_RBMIC');
$texto=get_option('texto_RBMIC');
$boton1=get_option('boton1_RBMIC');
$boton2=get_option('boton2_RBMIC');
$colorBoton=get_option('texto_boton__RBMIC');
$colorBorde=get_option('colorBorde_RBMIC');
$doctor_RBMIC=get_option('doctor_RBMIC');
?>
<div class="wrap">
<h1><?php _e("Responsive BMI Calculator","Responsive-BMI-Calculator");?></h1>
<h2><?php _e("Color Settings","Responsive-BMI-Calculator");?></h2></br>
<form method="post" name="formu_RBMIC" action="options.php">
    <?php settings_fields( 'RBMIC_settings-group' ); ?>
    <?php do_settings_sections( 'RBMIC_settings-group' ); ?>
        <?php _e("Set the background color.","Responsive-BMI-Calculator");?>
       <br><br><input style="width:200px" type="color" name="color_RBMIC" value="<?php echo $base ?>" />
     <br><br> <?php _e("Set the border color.","Responsive-BMI-Calculator");?>
       <br><br><input style="width:200px" type="color" name="borde_RBMIC" value="<?php echo $border ?>" />
	       <br><br> <?php _e("Set the text color.","Responsive-BMI-Calculator");?>
       <br><br><input style="width:200px" type="color" name="texto_RBMIC" value="<?php echo $texto ?>" />
	     <br><br> <?php _e("Set up the button colors:","Responsive-BMI-Calculator");?>
       <br><br><?php _e("Gradient 1","Responsive-BMI-Calculator");?>:&nbsp;<input style="width:100px" type="color" name="boton1_RBMIC" value="<?php echo $boton1 ?>" />
	   <?php _e("Gradient 2:","Responsive-BMI-Calculator");?>&nbsp;<input style="width:100px" type="color" name="boton2_RBMIC" value="<?php echo $boton2 ?>"/>
	   <?php _e("Text color:","Responsive-BMI-Calculator");?>&nbsp;<input style="width:100px" type="color" name="texto_boton__RBMIC" value="<?php echo $colorBoton ?>"/>
	   <?php _e("Border color","Responsive-BMI-Calculator");?><input style="width:100px" type="color" name="colorBorde_RBMIC" value="<?php echo $colorBorde ?>"/>
	  <br><br>

	   <h2><?php _e("Restablish original colors","Responsive-BMI-Calculator");?></h2><br>
	   <?php _e("Press to restablish the original colors","Responsive-BMI-Calculator");?>&nbsp;&nbsp;<button onclick="restablecer_RBMIC()" type="button" class="button button-primary"><?php _e("Restablish colors","Responsive-BMI-Calculator");?></button>
	   <br><br>

	   <h2><?php _e("Show the doctor image at the results page.","Responsive-BMI-Calculator");?></h2>
	   <br>
	   <select name="doctor_RBMIC">
	   <option <?php if($doctor_RBMIC=='1') echo'selected="selected"'?> value="1"><?php _e("Show","Responsive-BMI-Calculator");?></option>
	   <option <?php if($doctor_RBMIC=='0') echo'selected="selected"'?> value="0">Do <?php _e("Not Show","Responsive-BMI-Calculator");?></option>
	   </select>
	   <script type="text/javascript">
	   function restablecer_RBMIC(){
		document.formu_RBMIC.color_RBMIC.value='#c0c0c0';
		document.formu_RBMIC.borde_RBMIC.value='#808080';
		document.formu_RBMIC.texto_RBMIC.value='#000000';
	    document.formu_RBMIC.boton1_RBMIC.value='#3D94F6';
	    document.formu_RBMIC.boton2_RBMIC.value='#1E62D0';
	    document.formu_RBMIC.texto_boton__RBMIC.value='#FFFFFF';
	    document.formu_RBMIC.colorBorde_RBMIC.value='#337FED';
		alert(<?php echo"'";_e("Original colors restablished. Do not forget to save the changes","Responsive-BMI-Calculator"); echo"'";?>);
	   }
	   </script>
    <?php submit_button(); ?>

</form>
</div>
<?php
 }
