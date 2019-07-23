<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
    
		setcookie("prueba", "Esta es la información de nuestra primera Cookie", time()+300,
		    "/Sesiones&Cookies/ZonaContenidos/"); //time(toma la hora del ordenador y se le suma el tiempo que queremos que se guarde la Cookie en el ordenador
                                                   //el ultimo argumento es la direccion donde queremos que se guarde la Cookie, sino ponemos nada, se guarda en Sesionnes&cookies y actua en todos sus subdirectorios también 
   
		
   ?>
	
</body>
    
</html>