<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>
    <?php
    
        $palabra="JUAN";
        $palabra2="david";
        echo (strtolower($palabra)) . "<br>"; //para pasar a minusculas
        echo (strtoupper($palabra2)) . "<br>"; //para pasar a mayúsculas
        
        
        function suma($num1, $num2) {
            
            $resultado=$num1+$num2;
            
            return $resultado;
        }
        echo(suma(2,7));
        
        
    
    

	?>
    </body>

</html>