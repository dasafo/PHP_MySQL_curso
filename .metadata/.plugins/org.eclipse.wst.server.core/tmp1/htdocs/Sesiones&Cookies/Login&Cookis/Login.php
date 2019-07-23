<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>

<style>

    h1, h2{
        text-align:center;
       }
       
    table{
        
        width:25%;
        background-color:#04B4AE;
        border: 2px dotted #F00;
        margin:auto;
        
       }
       
       .izq{
            text-align:right;
            }
            
       .der{
            text-align:left;
            }
       td{
            text-align:center;
            padding:10px;
       }


</style>




</head>

<body>

<?php

$autenticado=false; //para que me diga si ha introducido bien el usuario y contraseña(=true)

if(isset($_POST["enviar"])){
    
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
       
       if($numeroRegistro!=0){ //si el usuario entra a la BBDD, implica que ha introducido bien el usuario y password, por lo tanto...
           
          $autenticado=true;
          
          if(isset($_POST["recordar"])){ //Si además activó la casilla Recordar
              
              setcookie("nombreUsuario", $_POST["login"], time()+86400); //entonces creamos la Cookie para que guarde lo que hay en la casilla de login
          }
           
       }else{
           
           echo "Error. Contraseña o usuario incorrecto";
       }            
             
   }catch(Exception $e){
       
       die("ERROR: " . $e->getMessage());
   }
}
		
?>
   
   
   
   <?php 
   
   if($autenticado==false){ //si NO se ha autentificado
       
       if(!isset($_COOKIE["nombreUsuario"])){ //Y si NO has creado la Cookie previamente entoces muestra el formulario
           
           include 'Formulario.html';
       }
   }
   
   if(isset($_COOKIE['nombreUsuario'])){
       
       echo "¡Hola " . $_COOKIE["nombreUsuario"] . "!";
       
       
   }else if($autenticado==true){
       
      echo "¡Hola " . $_POST["login"] . "!";
   }
   
   ?>
   
   
   

<h2>CONTENIDO DE LA WEB</h2>
<table width="800" border="0">

	<tr>
		<td><img src="1.jpg" width="300" height="200"/></td>
		<td><img src="5.png" width="300" height="200"/></td>
	</tr>
	<tr>
		<td><img src="3.jpg" width="300" height="200"/></td>
		<td><img src="4.jpg" width="300" height="200"/></td>
	</tr>

</table>

<?php 

    if($autenticado==true || isset($_COOKIE["nombreUsuario"])){
    
        include 'ZonaRegistrados.html';
    }


?>
    
  	
</body>
    
</html>