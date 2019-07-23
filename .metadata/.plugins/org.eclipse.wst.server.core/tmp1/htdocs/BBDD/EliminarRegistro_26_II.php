<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
    
        $cod=$_GET["c_art"];
        $sec=$_GET["seccion"];
        $nom=$_GET["n_art"];
        $pre=$_GET["precio"];
        $fec=$_GET["fecha"];
        $imp=$_GET["importado"];
        $por=$_GET["p_orig"];
        
        
        require ("DatosConexion.php"); //Para acceder a los datos de nuestra conexion a la BBDD

        $conexion=mysqli_connect($db_host, $db_usuario,$db_contra); //conectamos con la BBDD
        
        if(mysqli_connect_errno()){ //Este bucle se activa cuando NO se conecta a la BBDD por lo que sea
            
            echo "Fallo al conectar con la BBDD";
            exit(); //y le decimos que deje de intentar conectarse y salga
        }
        
        mysqli_select_db($conexion, $db_nombre) or die ("Conexión realizada, pero NO se encuentra la BBDD"); //Para que entre dentro de esa BBDD una vez conectada a ella, y sino que diga que no la encuentra
        
        mysqli_set_charset($conexion, "utf8"); //para que no de problema con los carácteres de la BBDD(acentos, palabras raras...)
        
        $consulta="DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO='$cod'";
        
        $resultados=mysqli_query($conexion, $consulta); //ejecutamos la consulta. Se crea una tabla en la memoria con la info ejecutada con el SQL
                      
        if($resultados==false){
            
            echo "ERROR en la consulta!!";
        }else{
            
           // echo "Registro eliminado con EXITO<br><br>";
            
           // echo mysqli_affected_rows($conexion); //con esta funcion nos dice el numero de elementos de la lista afectados al aplicar la orden SQL
            
            if(mysqli_affected_rows($conexion)==0){ //sino se ha modificado nada...
                
                echo "NO hay registros que eliminar con ese Código Artículo";
                
            }else{
                
                echo "Se han eliminado " . mysqli_affected_rows($conexion) . " registros de la BBDD. <br>";
            }
            
         }
        
        
        
        mysqli_close($conexion); //cerramos la conexion='conexion'
        
    
      
    ?>
	
</body>
    
</html>