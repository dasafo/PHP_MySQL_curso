<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
    
		setcookie("Idioma_Seleccionado", $_GET["idioma"], time()+86400);
		
		header("Location:VerCookie.php");
		
   ?>
	
</body>
    
</html>