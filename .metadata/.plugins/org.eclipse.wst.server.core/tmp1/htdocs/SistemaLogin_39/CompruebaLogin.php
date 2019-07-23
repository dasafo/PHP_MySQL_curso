<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
    
   try{
       
       $base=new PDO("mysql:host=localhost; dbname=curso_php", "root", "Kromosoma_85");
       
       $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
       $sql="SELECT * FROM usuariosPass WHERE USUARIOS= :login AND PASSWORD= :password";
       
       $resultado=$base->prepare($sql);
       
       $login=htmlentities(addslashes($_POST["login"]));
       $password=htmlentities(addslashes($_POST["password"]));
       
       $resultado->bindValue(":login", $login);
       $resultado->bindValue(":password", $password);
       
       $resultado->execute();
       
       $numeroRegistro=$resultado->rowCount(); //devolverá el numero de registros(en este caso 0 o 1)
       
       if($numeroRegistro!=0){ //si el usuario entra a la BBDD...
           
           //echo "<h2>Adelante!!!!</h2>";
           
           session_start(); //creas una sesion
           
           $_SESSION["usuario"]=$_POST["login"]; //almacenamos en la variable super global SESSION el login
           
           header("location:UsuariosRegistrados1.php");
           
       }else{
           
           header("location:Login.php"); //le decimos que vuelva otra vez a la pagina de registro(bucle infinito)
           
       }
       
       
       
       
       
   }catch(Exception $e){
       
       die("ERROR: " . $e->getMessage());
   }
		
		
   ?>
	
</body>
    
</html>