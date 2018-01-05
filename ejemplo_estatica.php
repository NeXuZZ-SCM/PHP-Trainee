<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo Variables Estaticas</title>
</head>
<body>

<!-- Trabajando con variables estaticas --> 
<?php 
	function incrementaVariable(){


		static $contador=0;
		$contador++;
		echo $contador . "<br/>";

	}
incrementaVariable();
incrementaVariable();
incrementaVariable();
incrementaVariable();

 ?>



</body>
</html>