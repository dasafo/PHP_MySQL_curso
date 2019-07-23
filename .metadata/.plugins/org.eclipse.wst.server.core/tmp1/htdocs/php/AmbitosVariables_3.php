<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

  <body>
    <?php
        $nombre="David";
        
        function dameNombre(){
            
            global $nombre; //convertimos en global la variable para que pueda ser usada dentro de la funcion
            
            $nombre="EL nombre es " . $nombre;
        }
        
        dameNombre();
        
        echo $nombre;
    

	?>
  </body>
 
</html>