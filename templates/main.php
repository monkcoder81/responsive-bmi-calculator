<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<script type="text/javascript">
function calcularImc(){
document.formularioIMC.submit();
}
function metrica(valor){
if(valor==0){

  document.getElementById('escondido').value=document.getElementById('selectEstatura').innerHTML;
  document.getElementById('selectEstatura').innerHTML=`<span id="selectEstatura"><select class="BMIselect" id="imc-estatura" required="true" name="imc-estatura">
  <option value="1.4224">4 ft 8</option>
  <option value="1.4478">4 ft 9</option>
  <option value="1.4732">4 ft 10</option>
  <option value="1.4986">4 ft 11</option>
  <option value="1.5240">5 ft 0</option>
  <option value="1.5494">5 ft 1</option>
  <option value="1.5748">5 ft 2</option>
  <option value="1.6002">5 ft 3</option>
  <option value="1.6256">5 ft 4</option>
  <option value="1.6510">5 ft 5</option>
  <option value="1.6764">5 ft 6</option>
  <option value="1.7018">5 ft 7</option>
  <option value="1.7272">5 ft 8</option>
  <option value="1.7526">5 ft 9</option>
  <option value="1.7780">5 ft 10</option>
  <option value="1.8034">5 ft 11</option>
  <option value="1.8288">6 ft 0</option>
  <option value="1.8542">6 ft 1</option>
  <option value="1.8796">6 ft 2</option>
  <option value="1.9050">6 ft 3</option>
  <option value="1.9304">6 ft 4</option>
  <option value="1.9558">6 ft 5</option>
  <option value="1.9812">6 ft 6</option>
  <option value="2.0066">6 ft 7</option>
  <option value="2.0320">6 ft 8</option>
  <option value="2.0574">6 ft 9</option>
  <option value="2.0828">6 ft 10</option>
  <option value="2.1082">6 ft 11</option>
  <option value="2.1336">7 ft 0</option>
  <option value="2.159">7 ft 1</option>
  <option value="2.1844">7 ft 2</option>

  </select>`;
}
if(valor==1){
document.getElementById('selectEstatura').innerHTML=document.getElementById('escondido').value;
}
}
</script>
<div class="calculadora-imc-responsive-contenedor">
<div class="calculadora-imc-responsive-marco">
<input type="hidden" id="escondido">
   <h3> <?php _e("Know your BMI","Responsive-BMI-Calculator")?></h3>

<form action="<?php echo get_the_permalink(get_option("calculadora-imc-responsive-pageId")); ?>" name="formularioIMC" method="POST">
<?php _e("Select your height","Responsive-BMI-Calculator")?>&nbsp;&nbsp;<br>
<span id="selectEstatura">
<select class="BMIselect" id="imc-estatura" required="true" name="imc-estatura">
<option value="" selected>
<option value="1.40">140</option>
<option value="1.41">141</option>
<option value="1.42">142</option>
<option value="1.43">143</option>
<option value="1.44">144</option>
<option value="1.45">145</option>
<option value="1.46">146</option>
<option value="1.47">147</option>
<option value="1.48">148</option>
<option value="1.49">149</option>
<option value="1.50">150</option>
<option value="1.51">151</option>
<option value="1.52">152</option>
<option value="1.53">153</option>
<option value="1.54">154</option>
<option value="1.55">155</option>
<option value="1.56">156</option>
<option value="1.57">157</option>
<option value="1.58">158</option>
<option value="1.59">159</option>
<option value="1.60">160</option>
<option value="1.61">161</option>
<option value="1.62">162</option>
<option value="1.63">163</option>
<option value="1.64">164</option>
<option value="1.65">165</option>
<option value="1.66">166</option>
<option value="1.67">167</option>
<option value="1.68">168</option>
<option value="1.69">169</option>
<option value="1.70">170</option>
<option value="1.71">171</option>
<option value="1.72">172</option>
<option value="1.73">173</option>
<option value="1.74">174</option>
<option value="1.75">175</option>
<option value="1.76">176</option>
<option value="1.77">177</option>
<option value="1.78">178</option>
<option value="1.79">179</option>
<option value="1.80">180</option>
<option value="1.81">181</option>
<option value="1.82">182</option>
<option value="1.83">183</option>
<option value="1.84">184</option>
<option value="1.85">185</option>
<option value="1.86">186</option>
<option value="1.87">187</option>
<option value="1.88">188</option>
<option value="1.89">189</option>
<option value="1.90">190</option>
<option value="1.91">191</option>
<option value="1.92">192</option>
<option value="1.93">193</option>
<option value="1.94">194</option>
<option value="1.95">195</option>
<option value="1.96">196</option>
<option value="1.97">197</option>
<option value="1.98">198</option>
<option value="1.99">199</option>
<option value="2.00">200</option>
<option value="2.01">201</option>
<option value="2.02">202</option>
<option value="2.03">203</option>
<option value="2.04">204</option>
<option value="2.05">205</option>
<option value="2.06">206</option>
<option value="2.07">207</option>
<option value="2.08">208</option>
<option value="2.09">209</option>
<option value="2.10">210</option>
<option value="2.11">211</option>
<option value="2.12">212</option>
<option value="2.13">213</option>
<option value="2.14">214</option>
<option value="2.15">215</option>
<option value="2.16">216</option>
<option value="2.17">217</option>
<option value="2.18">218</option>
<option value="2.19">219</option>
<option value="2.20">220</option>

</select> </span><select class="BMIselect"  onchange="metrica(this.value)" name="metricaEstatura" id="metricaEstaturaID">
  <option value="1" selected><?php _e("centimeters","Responsive-BMI-Calculator")?></option>
  <option value="0"><?php _e("feet and inches","Responsive-BMI-Calculator")?></option>
</select><br>
<br>
<?php _e("Introduce your weight","Responsive-BMI-Calculator")?> <div id="controlator"><input id="imc-peso" name="imc-peso" style="width:80px;text-align:center" type="number" size="3" required="true" type="text">
<select class="BMIselect" name="unit">
<option value="kg" selected><?php _e("kilograms","Responsive-BMI-Calculator")?>
<option value="libras"><?php _e("pounds","Responsive-BMI-Calculator")?>
</select></div> <br>


<button class="botonIMC" type="submit"><?php _e("Calculate","Responsive-BMI-Calculator")?></button>
</div>
</div>
<script type="text/javascript">

if(document.getElementById("metricaEstaturaID").value==0){
metrica(0);
}

</script>