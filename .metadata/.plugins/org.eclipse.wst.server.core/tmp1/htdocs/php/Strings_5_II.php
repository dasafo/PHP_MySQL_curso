<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>
    <?php
    
    $variable1="Casa";
    
    $variable2="CASA";
    
    $resultado=strcmp($variable1, $variable2); //Devuelve 1(Flase) si no son iguales, 0(True) si son iguales. strcmp SI diferencia entre mayusculas y minusculas
    
    $resultado2=strcasecmp($variable1, $variable2); //strcasecmp  NO diferencia entre mayusculas y minusculas
    
    echo "El resultado es " . $resultado . "<br>";
    echo "El resultado es " . $resultado2 . "<br>";
    
    
    if(!$resultado){ //si resultado no es verdadero(devuelve un 0)
        
        echo "$variable1 y $variable2 SI coinciden";
    }else{
        
        echo "$variable1 y $variable2 NO diferentes";
    }
    
    
	?>
    </body>

</html>