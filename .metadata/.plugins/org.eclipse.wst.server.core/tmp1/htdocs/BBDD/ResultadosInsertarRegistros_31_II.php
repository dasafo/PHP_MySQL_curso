<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>
    <?php    
    
        $c_art=$_GET["c_art"];
        $secc=$_GET["secc"];
        $n_art=$_GET["n_art"];
        $pre=$_GET["pre"];
        $fec=$_GET["fec"];
        $imp=$_GET["imp"];
        $p_ori=$_GET["p_ori"];
             
        require ("DatosConexion.php"); //Para acceder a los datos de nuestra conexion a la BBDD

        $conexion=mysqli_connect($db_host, $db_usuario,$db_contra); //conectamos con la BBDD
        
        
        
        if(mysqli_connect_errno()){ //Este bucle se activa cuando NO se conecta a la BBDD por lo que sea
            
            echo "Fallo al conectar con la BBDD";
            exit(); //y le decimos que deje de intentar conectarse y salga
        }
        
        mysqli_select_db($conexion, $db_nombre) or die ("Conexión realizada, pero NO se encuentra la BBDD"); //Para que entre dentro de esa BBDD una vez conectada a ella, y sino que diga que no la encuentra
        
        mysqli_set_charset($conexion, "utf8"); //para que no de problema con los carácteres de la BBDD(acentos, palabras raras...)
        
        
        
        // 1-Se crea la sentencia SQL sustituyendo los valores de critero por ?
        
        $sql="INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA,
               IMPORTADO, PAÍSDEORIGEN) VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        // 2-Preparamos la consulta con la funcion mysqli_prepare(). Que requiere dos parámetros, el objeto conexion y la sentencua SQL
        
        $resultado=mysqli_prepare($conexion, $sql);
        
        // 3-Unimos los parámetros a la sentencia SQL con mysqli_stmt_bind_param() que devuelve True o False, y requiere el tipo de dato que se utilizará como critero en SQL(cariable con criterio)
        
        $ok=mysqli_stmt_bind_param($resultado, "sssdsss", $c_art, $secc, $n_art, $pre, $fec, $imp, $p_ori); // ponemos la letra según el tipo de campo, tenemos un decimal(d) en el precio(texto="s", entero="i",decimal="d")
        
        // 4-Ejecutamos la constulta con la función mysqli_stmt_execute() qeu devuelve True o False, y necesita como parámetro el objeto mysqli_stmt
        
        $ok=mysqli_stmt_execute($resultado);
        
        if($ok==false){
            
            echo "ERROR al ejecutar la consulta";
            
        }else{
            
             echo "Agregado nuevo registro";
               
        // 5-Asociamos las variables al resultado de la consulta. Esto lo conseguimos con la función mysqli_stmt_bind_result() que devuelve True o False, y necesita como parámetros el objeto sqli_stmt y tantas variables como columnas tenga la consulta SQL
        
                //****En este caso solo insertamos, no queremos que nos muestre nada****
            
        // 6-Realizamos la lectura de los valores con mysqli_stmt_fetch(), que pide como parámetro el objeto mysqli_stmt
        
                //***En este caso insertamos, no realizamos lectura de datos*****
                          
                
        // 7-Cerramos el objeto creado
        
        mysqli_stmt_close($resultado);
        
        }
      
	?>
    </body>

</html>