<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>
    <?php    
             
        require ("DatosConexion.php"); //Para acceder a los datos de nuestra conexion a la BBDD

        $conexion=mysqli_connect($db_host, $db_usuario,$db_contra); //conectamos con la BBDD
        
        $usuario=mysqli_real_escape_string($conexion, $_GET["usu"]); //usamos msqli_real_scape_string para evitar las inyecciones de código raro(',&,%,....)
        $contra=mysqli_real_escape_string($conexion, $_GET["con"]);
        
        if(mysqli_connect_errno()){ //Este bucle se activa cuando NO se conecta a la BBDD por lo que sea
            
            echo "Fallo al conectar con la BBDD";
            exit(); //y le decimos que deje de intentar conectarse y salga
        }
        
        mysqli_select_db($conexion, $db_nombre) or die ("Conexión realizada, pero NO se encuentra la BBDD"); //Para que entre dentro de esa BBDD una vez conectada a ella, y sino que diga que no la encuentra
        
        mysqli_set_charset($conexion, "utf8"); //para que no de problema con los carácteres de la BBDD(acentos, palabras raras...)
        
        // $consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%'"; //realizamos una consulta con SQL para que nos muestre lo que se almacena en busqieda(lo que metemos en la celda de entrada)
                                                                               //El % delante(o/y detrás) le indica que puede haber varios caracteres delante(o/y detras) y el LIKE es la forma cuando se usan esos caracteres comodín( % , _ , ...)
        
        $consulta="DELETE FROM usuarios WHERE Usuario='$usuario' AND Contraseña='$contra'"; //Inyeccion externa, si ponemos en la celda de entrada algo así por ejemplo: tubo' or '1'='1
                                                                              //Así accedemos a toda la lista, sería un ataque externo a nuestro código.
        echo "$consulta <br><br>"; //Para que nos saque el código SQL de arriba
                       
       /* if(mysqli_query($conexion, $consulta)){
         
            echo "Baja pocesada con éxito";              
             
        }*/
        
        mysqli_query($conexion, $consulta);
        
        if(mysqli_affected_rows($conexion)>0){ //Si ha borrado algo(mysqli_affected_rows>0) haz...
            
            echo "Baja Procesada";
            
        }else{
            
            echo "No hay registro con esos datos";
        }
        
        mysqli_close($conexion); //cerramos la conexion='conexion'
      
	?>
    </body>

</html>