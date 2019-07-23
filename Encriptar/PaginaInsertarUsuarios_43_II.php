<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	$usuario= $_POST["usu"];
	$contrasenia= $_POST["contra"];
	
	$passCifrado=password_hash($contrasenia, PASSWORD_DEFAULT, array("cost"=>12)); //para encriptar la contraseña creando un Hash y una 'sal' automatica(con PASSWOD_DEFAULT)
		                                                                           // El tercer argumento(sino se pone deja por defecto el que sea) nos permite cambiar el coste del cifrado(el nivel de encriptamiento,a mayor numero mejor, pero mas coste de recursos
	
	
	try{

		$base=new PDO('mysql:host=localhost; dbname=curso_php', 'root', 'Kromosoma_85');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET utf8");		
		
		
		$sql="INSERT INTO usuariosPass (USUARIOS, PASSWORD) VALUES (:usu, :contra)";
		
		$resultado=$base->prepare($sql);		
		
		
		$resultado->execute(array(":usu"=>$usuario, ":contra"=>$passCifrado));		//metemops el $passCifrado
		
		
		echo "Registro insertado";
		
		$resultado->closeCursor();

	}catch(Exception $e){			
		
		
		echo "Línea del error: " . $e->getLine();
		
	}finally{
		
		$base=null;
		
		
	}

?>
</body>
</html>