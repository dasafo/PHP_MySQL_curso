<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>
    <?php
    
        $busqueda=$_GET["buscar"]; //alamcenamos en $busqueda lo que hay en la celda de entrada de texto cuando le damos a Dale!
    
        require ("DatosConexion.php"); //Para acceder a los datos de nuestra conexion a la BBDD

        $conexion=mysqli_connect($db_host, $db_usuario,$db_contra); //conectamos con la BBDD
        
        if(mysqli_connect_errno()){ //Este bucle se activa cuando NO se conecta a la BBDD por lo que sea
            
            echo "Fallo al conectar con la BBDD";
            exit(); //y le decimos que deje de intentar conectarse y salga
        }
        
        mysqli_select_db($conexion, $db_nombre) or die ("Conexión realizada, pero NO se encuentra la BBDD"); //Para que entre dentro de esa BBDD una vez conectada a ella, y sino que diga que no la encuentra
        
        mysqli_set_charset($conexion, "utf8"); //para que no de problema con los carácteres de la BBDD(acentos, palabras raras...)
        
        $consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%'"; //realizamos una consulta con SQL para que nos muestre lo que se almacena en busqieda(lo que metemos en la celda de entrada)
                                                                               //El % delante(o/y detrás) le indica que puede haber varios caracteres delante(o/y detras) y el LIKE es la forma cuando se usan esos caracteres comodín( % , _ , ...)
        
        // $consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO='$busqueda'"; //Inyeccion externa, si ponemos en la celda de entrada algo así por ejemplo: tubo' or '1'='1
                                                                              //Así accedemos a toda la lista, sería un ataque externo a nuestro código.
        echo "$consulta <br><br>"; //Para que nos saque el código SQL de arriba
        
        $resultados=mysqli_query($conexion, $consulta); //ejecutamos la consulta. Se crea una tabla en la memoria con la info ejecutada con el SQL
        
                
       // while($fila=mysqli_fetch_row($resultados)){ //para que saque todos los datos necesitamos un bucle, sean el numero que sean dentro de la BBDD
                                                             //Miramos dentro de esa tabla de la memoria. Miramos linea alinea lo que hay dentro de esa tabla. Cada vez q se usa mysqli_fetch_row() saca la primera linea, la segunda,...
        while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){ //creamos un array asociativo
            
            
        echo "<table><tr><td>";
            
        echo $fila['CÓDIGOARTÍCULO'] . "</td><td>";
        echo $fila['NOMBREARTÍCULO'] . "</td><td>";
        echo $fila['PAÍSDEORIGEN'] . "</td><td>";
        echo $fila['SECCIÓN'] . "</td><td>";
        echo $fila['IMPORTADO'] . "</td><td>";
        echo $fila['PRECIO'] . "</td><td>";
        
        echo "</td></tr></table>";
                
        echo "<br>";
               
        
        }
        
        mysqli_close($conexion); //cerramos la conexion='conexion'
      
	?>
    </body>

</html>