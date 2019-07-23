<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>
    <?php
    
    $variable1=8;
   
    $variable2="8";
    
    $variable3="DAvid";
    
    if($variable1==$variable2){ //== Compara dos variables sin importar de qué tipo sean
        
        echo "Son iguales<br>";
    }else{
        
        echo "Son diferentes<br>";
    }
    
    
    
    if($variable1===$variable2){ //=== Compara dos variables IMPORTANDO de qué tipo sean
        
        echo "Son iguales<br>";
    }else{
        
        echo "Son diferentes<br>";
    }
    
    if($variable1!=$variable2){ //!= Compara dos variables si son diferentes sin importar el tipo de las variables
        
        echo "Son diferentes<br>";
    }else{
        
        echo "Son iguales<br>";
    }
    
    if($variable1<>$variable2){ //<> Compara dos variables si son diferentes IMPORTANDO el tipo de las variables
        
        echo "Son diferentes<br>";
    }else{
        
        echo "Son iguales<br>";
    }
    
	?>
    </body>

</html>