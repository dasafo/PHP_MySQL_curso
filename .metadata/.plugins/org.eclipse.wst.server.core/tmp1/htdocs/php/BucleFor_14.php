<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>
    <?php
        
    for($i=0; $i<=10;$i++){
        
        echo "$i<br>"; 
        
    }
    
    for($j=0; $j<=20; $j+=2){
        
        echo "<p> Hemos entrado en el bucle</p>";
        
        if($j=6){
            
            echo "<p> Bucle interrumpido </p>";
            
            break;
        }
    }
    
    for($k=0;$k<=10;$k++){
        
        echo "9 x $k = " . 9*$k . "<br>";
        
    }
    echo "<p> Hemos salido del bucle</p>";
    
    
    for($l=10; $l>=-10; $l--){
        
        if($l==0){
            
            echo "No se puede dividr por 0 <br>";
            
            continue;
        }
        
        echo "9 / $l = " . 9/$l . "<br>";
    }
    echo "<p> Hemos salido del bucle</p>";
    
        
        

	?>
    </body>

</html>