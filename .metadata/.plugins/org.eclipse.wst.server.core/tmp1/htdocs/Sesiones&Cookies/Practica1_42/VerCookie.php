<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
    
   if(!$_COOKIE["Idioma_Seleccionado"]){ //si no se ha creado la Cookie....
       
       header("Location:pag1.php");
       
   }else if($_COOKIE["Idioma_Seleccionado"]=="dl"){
       
       header("Location:deutsch.php");
       
       
   }else if($_COOKIE["Idioma_Seleccionado"]=="es"){
       
       header("Location:cuba.php");
       
       
   }
		
   ?>
	
</body>
    
</html>