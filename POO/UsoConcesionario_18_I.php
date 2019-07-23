<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario_18_II.php");
	
	// Compra_vehiculo::$ayuda; //Para hacer referencia a una constante(static) en este caso ayuda, ::$ayuda,
	
	Compra_vehiculo::descuentoGobierno(); //hacemos una llamada a la funcion estatica descuentoGobierno
	
	$compra_Antonio=new Compra_vehiculo("compacto");
	
	$compra_Antonio->climatizador();
	
	$compra_Antonio->tapiceria_cuero("blanco");
	
	echo "El precio final del coche de Antonio es " . $compra_Antonio->precio_final() . " lereles.<br>";
	
	$compra_Ana=new Compra_vehiculo("urbano");
	
	$compra_Ana->climatizador();
	
	$compra_Ana->tapiceria_cuero("rojo");
	
	echo "El precio final del coche de Ana es " . $compra_Ana->precio_final() . " lereles.<br>";
	
	
	
	


?>
</body>
</html>