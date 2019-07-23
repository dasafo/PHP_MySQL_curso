<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
 <?php
    
 function incrementaVariable(){
     
     static $contador=0; //con static hacemos el guarde el valor anterior cada vez que se haga la llamada a la función
     
     $contador++;
     
     echo $contador . "<br>";
 }
 
 incrementaVariable();
 incrementaVariable();
 incrementaVariable();
 incrementaVariable();
 
 
 
 
    

  ?>
</body>

</html>