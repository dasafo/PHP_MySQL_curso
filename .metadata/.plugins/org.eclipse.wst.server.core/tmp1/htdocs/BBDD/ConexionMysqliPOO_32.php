<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
    
		$conexion=new mysqli("localhost", "root", "Kromosoma_85", "curso_php");
		
		if($conexion->connect_errno){ //si falla la conexion...
		    
		    echo "¡¡¡Fallo en la Conexión a la BBDD!!!" . $conexion->connect_errno;
		    
		}
		
		// mysqli_set_charset($conexion, "utf8");
		$conexion->set_charset("utf8");
		
		$sql="SELECT * FROM PRODUCTOS";
		
		//$resultados=myqli_query($conexion, $sql);
		$resultados=$conexion->query($sql);
		
		if($conexion->errno){
		    
		    die($conexion->error);
		}
		
		//while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
		while($fila=$resultados->fetch_array()){
		    
		    echo "<table><tr><td>";
		    
		    echo $fila[0] . "</td><td>";
		    echo $fila[1] . "</td><td>";
		    echo $fila[2] . "</td><td>";
		    echo $fila[3] . "</td><td>";
		    echo $fila[4] . "</td><td>";
		    echo $fila[5] . "</td><td>";
		    
		    echo "</td></tr></table>";
		    
		    echo "<br>";
		}
		
		//mysqli_close($conexion);
		$conexion->close();
		
		
   ?>
	
</body>
    
</html>