<!DOCTYPE html>
<html>
<head>
	<title>Trabajos STRING</title>


	<style type="text/css">
		.resaltar{
			color: #F00;
			font-weight: bold;
		}
	</style>
</head>
<body>

<?php 
echo '<h4>1- Ejemplo de frase con estilo</h4>';
echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";

echo '<h4>2- Diferencia entre "" y \'\'</h4>';
$nombre;
$nombre="juan";
echo "hola $nombre";
echo "<br/>";
echo 'hola $nombre';
echo "<br/>";


//Verifica que las cadenas sean iguales 
echo '<h4>3- strcmp($variable1,$variable2) strcmp - Verifica que las cadenas sean iguales sensible a mayusculas y minusculas</h4>';
echo '$variable1="casa"';
echo "<br/>";
echo '$variable2="CASA"';
echo "<br/>";
$variable1="casa";
$variable2="CASA";
$resultado=strcmp($variable1,$variable2);
echo "El resultado es : " . $resultado . "<br/>";

if ($resultado==0) {
	# code...
	echo "las variables coinciden";
}else{
	echo "las variables no coinciden";
}
echo "<br/>";
//Verifica que las cadenas sean iguales 
echo '<h4>3.1- strcasecmp($variable1,$variable2) strcmp - Verifica que las cadenas sean iguales / Pero no es sensible a mayusculas y minusculas </h4>';
echo '$variable1="casa"';
echo "<br/>";
echo '$variable2="CASA"';
echo "<br/>";
$variable1="casa";
$variable2="CASA";
$resultado=strcasecmp($variable1,$variable2);
echo "El resultado es : " . $resultado . "<br/>";

if ($resultado==0) {
	# code...
	echo "las variables coinciden";
}else{
	echo "las variables no coinciden";
}
echo "<br/>";

//funcion PHP addslashes() Devuelve una cadena con escapes. 
echo "<h4>4- addslashes - Escapa un string con barras invertidas</h4>";
$str = "Is your name O'reilly?";

// Outputs: Is your name O\'reilly? 
echo addslashes($str);

//Substring  substr
echo "<h4>5- substr(\"hola\", 2 )Devuelve parte de una cadena</h4>";
$substring = substr("hola", 2 );
echo $substring;


// STR_REPLACE 
echo "<h4>6- str_replace(search, replace, subject)Reemplaza un char o string por otro Ejemplo1</h4>";
$textoAReemplazar= "CRISTIAN MARTIN SGUAZZIN";
$bodytag = str_replace("I", "1", $textoAReemplazar);
echo $bodytag;

// Otra tecnica de reemplazo  STR_REPLACE 
// Reemplaza Caracteres search por replace en subject
// Si usamos Ireplace no sera sensible a mayusculas y minusculas 
echo "<h4>7- str_replace(search, replace, subject)Reemplaza un char o string por otro Ejemplo2</h4>";

$search  = "I";
$replace = "1";
$subject = 'CRISTIAN MARTIN SGUAZZIN';
echo str_replace($search, $replace, $subject);
$resultadoREEMPLAZO= str_replace($search, $replace, $subject);
echo "<br/>";
$search  = "A";
$replace = "4";
$subject = $resultadoREEMPLAZO;
echo str_replace($search, $replace, $subject);
$resultadoREEMPLAZO= str_replace($search, $replace, $subject);
echo "<br/>";
$search  = "S";
$replace = "5";
$subject = $resultadoREEMPLAZO;
echo str_replace($search, $replace, $subject);
$resultadoREEMPLAZO= str_replace($search, $replace, $subject);
echo "<br/>";

echo "<h4>8- str_ireplace(search, replace, subject)Este cambio no es sensible a mayusculas y minusculas </h4>";

$search  = "i";
$replace = "1";
$subject = 'CRISTIAN MARTIN SGUAZZIN';
echo str_ireplace($search, $replace, $subject);
$resultadoREEMPLAZO2= str_ireplace($search, $replace, $subject);

 ?>
</body>
</html>