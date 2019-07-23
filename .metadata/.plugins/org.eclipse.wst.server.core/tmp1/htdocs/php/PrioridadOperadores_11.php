<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>
    <?php
    
        $var1=true;
        $var2=false;
        
        $var3=true;
        $var4=false;
        
        
        
        $resultado=$var1 && $var2; // si son iguales resultado=true, si son diferentes resultado=false
        if($resultado==true){
            
            echo "Las dos variables tienen el mismo valor booleano<br><br>";
        }else{
            
            echo "Las dos variables tienen diferente valor booleano<br><br>";
        }
        
        
        
        $resultado2=$var3 and $var4; // Aquí usadno 'and' el '=' tiene prioridad respecto al 'and'
        if($resultado2==true){ //Por lo tanto $resultado2=$var3
            
            echo "Las dos variables tienen el mismo valor booleano<br><br>";
        }else{
            
            echo "Las dos variables tienen diferente valor booleano<br><br>";
        }
	?>
    </body>

</html>