<?php
    
	//REcibimos los datos de la imagen
	
    $nombreImagen=$_FILES["imagen"]["name"];
    
    $tipoImagen=$_FILES["imagen"]["type"];
    
    $tamagnoImagen=$_FILES["imagen"]["size"];
    
   // echo $_FILES['imagen']["tmp_name"] . "<br>";
   // echo $_FILES['imagen']["name"] . "<br>";
    // echo $_FILES['imagen']["type"] . "<br>";
    
    echo $tipoImagen;
    
    
    if($tamagnoImagen<=1000000){ //Si el tamaño de la imagen es menor de 1000000 bytes(1Mb) entonces se ejecuta lo siguiente
    
        if($tipoImagen=="image/jpeg" || $tipoImagen=="image/jpg" || $tipoImagen=="image/gif" || $tipoImagen=="image/png"){
            
       
        
    //Ruta de la carpeta destino en servidor
    
    $carpetaDestino=$_SERVER["DOCUMENT_ROOT"] . "/../../../../../descargas/"; //Lo baja por defecto temporalmente en "/Documents/PHP/Curso/.metadata/.plugins/org.eclipse.wst.server.core/tmp0/htdocs
                                                                              //Lo almacenamos en Documents/PHP/Curso/descargas/
    
    //Moveos la imagen de la carpeta temporal al directorio escogido
    
    move_uploaded_file($_FILES["imagen"]["tmp_name"], $carpetaDestino.$nombreImagen);

        }else{
            echo "No es una imagen válida. Solo jpg/jpeg/gif/png";
        }
    
    }else{
        
        echo "El tamaño es muy grande";
    }
    
    require("DatosConexion.php");
    
    $conexion=mysqli_connect($db_host, $db_usuario,$db_contra); //conectamos con la BBDD
    
    if(mysqli_connect_errno()){ //Este bucle se activa cuando NO se conecta a la BBDD por lo que sea
        
        echo "Fallo al conectar con la BBDD";
        exit(); //y le decimos que deje de intentar conectarse y salga
    }
    
    mysqli_select_db($conexion, $db_nombre) or die ("Conexión realizada, pero NO se encuentra la BBDD"); //Para que entre dentro de esa BBDD una vez conectada a ella, y sino que diga que no la encuentra
    
    mysqli_set_charset($conexion, "utf8"); //para que no de problema con los carácteres de la BBDD(acentos, palabras raras...)
    
    // $sql="INSERT INTO PRODUCTOS (FOTO) VALUES ('$nombreImagen')"; //realizamos una consulta con SQL
    $sql="UPDATE PRODUCTOS SET FOTO='$nombreImagen' WHERE CÓDIGOARTÍCULO='AR01'"; //realizamos una consulta con SQL
    
    $resultado=mysqli_query($conexion, $sql); //ejecutamos la consulta. Se crea una tabla en la memoria con la info ejecutada con el SQL
    
    
		
?>
	
