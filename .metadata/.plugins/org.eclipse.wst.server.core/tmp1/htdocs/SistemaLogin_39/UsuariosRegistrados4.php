<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>

	<?php 
	
	   session_start(); //reanudamos la sesión
	   
	   if(!isset($_SESSION["usuario"])){ //lo hacemos para que no se pueda pegar esta pagina en otro navegador y poder entrar sin pasar por Password
	       
	       header("Location:Login.php");
	   }
	
	
	?>
    
   <h1>Bienvenidos Usuarios</h1>
   
    <form action="Cierre.php">
    <h2><input type="submit" value="Cierra Sesión" /></h2>
	</form>
   
   <?php 
   
    echo "Usuario: " . $_SESSION["usuario"] . "<br><br>";
   
   ?>
   
   <p>Esto es solo para usuarios registrados</p>
   
   <form action="UsuariosRegistrados1.php">
    <input type="submit" value="Volver" />
	</form>
	
</body>
    
</html>