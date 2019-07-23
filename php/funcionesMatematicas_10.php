<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>
    <?php

        $num1=rand(10,50); //numero aleatorio entre 10 y 50
        echo "El número aleatorio es: $num1<br><br>";
        
        $num2=pow(5,2); //potencia de 5 elevado a 2
        echo "El resultado de la potencia es: $num2<br><br>";
    
        $num3=5.75895666; //redondeamos con 2 decimales
        echo "El resultado del redondeo es: " . round($num3, 2) . "<br><br>";
        
        $num4="5"; //PHP lo almacena como String(TExto)
        $num4+=2; //PHP asume que ahora num4 ya no es String sino un entero(Cating implicito)
        $num4+5.25; //PHP asume ahora que num4 no es un entero sino es un float(Cating implicito)
        echo "El resultado  es: " . $num4 . "<br><br>";
        
        $num5="5"; //PHP lo almacena como String(TExto)
        $resultado=(int)$num5; //hacmos un casting Explicito, pasamos de String a entero(int)
        echo "El resultado  es: " . $num5 . "<br><br>";
        
	?>
    </body>

</html>