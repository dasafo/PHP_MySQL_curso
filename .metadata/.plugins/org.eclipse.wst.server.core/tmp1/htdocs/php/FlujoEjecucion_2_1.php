<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>
    
   
    
    
    <?php

    
    include 'dameDatos_2_2.php'; //para que incluya la funcion guardada en ese archivo
    // require 'dameDatos.php'; //con require le decimos que si no existe ese archivo no ejecute el programa, cosa que con include no pasa
    
    echo "Este es el primer mensaje <br>";
    
    
    
    dameDatos();  //Llamamos a la función
    
    echo "Este es el segundo mensaje <br>";
    
    
	?>
    </body>

</html>