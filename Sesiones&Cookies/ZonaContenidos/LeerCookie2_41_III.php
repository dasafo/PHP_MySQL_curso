<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
    
   if(isset($_COOKIE["prueba"])){
       
		echo $_COOKIE["prueba"] . "<br>";
		
   }else{
       
       echo "La Cookie no se ha creado" . "<br>";
   }
   ?>
	
</body>
    
</html>