<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>
    <?php
    
       function frase_mayus($frase, $conversion=true) {
           
          $frase=strtolower($frase);
          if($conversion==true){
              
              $resultado=ucwords($frase); //pone la primera letra de cada palabra en mayusculas
          }else{
              
              $resultado=strtoupper($frase); //pone todo en mayusculas
          }
          
          return $resultado;
       }
       
       echo frase_mayus("Esto es una prueba", false); //sino ponemos false, lo toma como true
        
        
    
    

	?>
    </body>

</html>