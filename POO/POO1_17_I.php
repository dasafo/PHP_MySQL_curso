<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
    <body>
    <?php
    
        include("Vehiculos_17_II.php");
        
        $mazda=new Coche();
        
        $pegaso=new Camion();
                     
        echo "El Mazda tiene " . $mazda->getRuedas() . " ruedas<br>";
        
        echo "EL Pegaso tiene " . $pegaso->getRuedas() . " ruedas<br>";
          
        echo "El Mazda tiene un motor de " . $mazda->getMotor() . " cc<br>";
        
        
        // $pegaso->frenar();
         
        // $pegaso->arrancar();
        
        
        
        
    

	?>
    </body>

</html>