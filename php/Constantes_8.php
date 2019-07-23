<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>
    <?php

    define("AUTOR", "David", false); //asi se dfine una constante define(nombre(siempre mayusculas por convenio), valor)
                                    //el tercer argumento es opcional, true para que el nombre sea insensible a mayusculas o minusculas(no recomendado), por defencto False
    
    echo "El autor es: " . AUTOR; //las constantes van fuera de las ""
    
    echo "La línea de esta instruccion es: " . __LINE__ . "<br>"; //__LINE__ es una constante predefinida de PHP(ver Google)
    
    echo "Estmos trabjando con este fichero: " . __FILE__ . "<br>";
    
	?>
    </body>

</html>