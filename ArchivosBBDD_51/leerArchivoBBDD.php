<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
   
        $Id="";
        
        $contenido="";
        
        $tipo="";
    
    
		require ("DatosConexion.php");
		
		$conexion=mysqli_connect($db_host, $db_usuario,$db_contra); //conectamos con la BBDD
		
		if(mysqli_connect_errno()){ //Este bucle se activa cuando NO se conecta a la BBDD por lo que sea
		    
		    echo "Fallo al conectar con la BBDD";
		    exit(); //y le decimos que deje de intentar conectarse y salga
		}
		
		mysqli_select_db($conexion, $db_nombre) or die ("Conexión realizada, pero NO se encuentra la BBDD"); //Para que entre dentro de esa BBDD una vez conectada a ella, y sino que diga que no la encuentra
		
		mysqli_set_charset($conexion, "utf8"); //para que no de problema con los carácteres de la BBDD(acentos, palabras raras...)
		
		$consulta="SELECT * FROM Archivos WHERE ID=1";
		
		$resultado=mysqli_query($conexion, $consulta);
		
		while($fila=mysqli_fetch_array($resultado)){
		    
                $Id=$fila["ID"];
                
                $contenido=$fila["CONTENIDO"];
                
                $tipo=$fila["TIPO"];
		    
		    
		}
		
		echo "Id: " . $Id . "<br>";
		
		echo "Tipo: " . $tipo . "<br>";
		
		echo "<img src='data:image/jpeg; base64," . base64_encode($contenido) . "'>";
		
		
   ?>
   
<div>



</div>
	
</body>
    
</html>