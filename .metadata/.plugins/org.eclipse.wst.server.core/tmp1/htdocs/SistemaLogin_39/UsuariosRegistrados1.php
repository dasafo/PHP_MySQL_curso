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
   
   <?php 
   
    echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
   
   ?>
        
    <h2><form action="Cierre.php">
    <input type="submit" value="Cierra Sesión" />
	</form></h2>
   
   
   <p>Esto es solo para usuarios registrados</p>
   
   
   
   <table style="width: 60%;" border="1">
      <tbody>
        <tr align="center">
          <td rowspan="1" colspan="3" style="height: 52px;">
            <h3>Zona de usuarios Registrados</h3>
          </td>
        </tr>
        <tr>
          <td><a href="UsuariosRegistrados2.php">Página 1</a></td>
          <td><a href="UsuariosRegistrados3.php">Página 2</a></td>
          <td><a href="UsuariosRegistrados4.php">Página 3</a></td>
        </tr>
      </tbody>
    </table>
	
</body>
    
</html>