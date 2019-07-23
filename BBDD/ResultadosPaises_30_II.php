<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>
    <?php    
    
        $pais=$_GET["buscar"];
             
        require ("DatosConexion.php"); //Para acceder a los datos de nuestra conexion a la BBDD

        $conexion=mysqli_connect($db_host, $db_usuario,$db_contra); //conectamos con la BBDD
        
        
        
        if(mysqli_connect_errno()){ //Este bucle se activa cuando NO se conecta a la BBDD por lo que sea
            
            echo "Fallo al conectar con la BBDD";
            exit(); //y le decimos que deje de intentar conectarse y salga
        }
        
        mysqli_select_db($conexion, $db_nombre) or die ("Conexión realizada, pero NO se encuentra la BBDD"); //Para que entre dentro de esa BBDD una vez conectada a ella, y sino que diga que no la encuentra
        
        mysqli_set_charset($conexion, "utf8"); //para que no de problema con los carácteres de la BBDD(acentos, palabras raras...)
        
        
        
        // 1-Se crea la sentencia SQL sustituyendo los valores de critero por ?
        
        $sql="SELECT CÓDIGOARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE PAÍSDEORIGEN= ?";
        
        // 2-Preparamos la consulta con la funcion mysqli_prepare(). Que requiere dos parámetros, el objeto conexion y la sentencua SQL
        
        $resultado=mysqli_prepare($conexion, $sql);
        
        // 3-Unimos los parámetros a la sentencia SQL con mysqli_stmt_bind_param() que devuelve True o False, y requiere el tipo de dato que se utilizará como critero en SQL(cariable con criterio)
        
        $ok=mysqli_stmt_bind_param($resultado, "s", $pais); //al ser de tipo texto es "s", si fuera numerico sería "i", si decimal una "d"
        
        // 4-Ejecutamos la constulta con la función mysqli_stmt_execute() qeu devuelve True o False, y necesita como parámetro el objeto mysqli_stmt
        
        $ok=mysqli_stmt_execute($resultado);
        
        if($ok==false){
            
            echo "ERROR al ejecutar la consulta";
            
        }else{
               
        // 5-Asociamos las variables al resultado de la consulta. Esto lo conseguimos con la función mysqli_stmt_bind_result() que devuelve True o False, y necesita como parámetros el objeto sqli_stmt y tantas variables como columnas tenga la consulta SQL
        
        $ok=mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais); 
            
        // 6-Realizamos la lectura de los valores con mysqli_stmt_fetch(), que pide como parámetro el objeto mysqli_stmt
        
        echo "Artículos encontrados: <br><br>";
        
        while(mysqli_stmt_fetch($resultado)){
            
            echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";
                  
        }
        
        // 7-Cerramos el objeto creado
        
        mysqli_stmt_close($resultado);
        
        }
      
	?>
    </body>

</html>