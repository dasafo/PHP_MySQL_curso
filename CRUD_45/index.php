<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>

<?php 

    include("conexion.php");
    
    //--------------------------------------------PAGINACION (ver Paginacion_46)--------------------------------------------------------------
    
    $tamanoPaginas=3; //Para decirle cuantos registros por pagina queremos
    
    
    if(isset($_GET["pagina"])){ //pagina se define mas abajo, por eso le decimos que solo haga el segundo bucle if cuando pinche en la paginacion y no antes
        
        if($_GET["pagina"]==1){ //si te encuentras en la pagina 1...
            
            header("Location:index.php");
            
        }else{ //si no guardame en $pagina que numero es
            
            $pagina=$_GET["pagina"];
            
        }
        
    }else{ //sino ha dado clik al enlace de la paginacion entonces
        
        $pagina=1; //Nos dice la página que nos encontraremos cuando cargemos por primera vez la Web
        
    }
                
    $empezarDesde=($pagina-1)*$tamanoPaginas; //para almacenar el numero de registro con que empieza cada página
    
    $sqlTotal="SELECT * FROM datosUsuarios"; //hacemos una llamada SQL para saber cuantos registros nos devuelve la consulta
    
    $resultado=$base->prepare($sqlTotal);
    
    $resultado->execute(array());
    
    $numFilas=$resultado->rowCount(); //para que cuente las filas que tenemos dentro del array($resultado)
    
    $totalPaginas=ceil($numFilas/$tamanoPaginas); //PAra calcular las paginas que necesitaremos, con ceil() redondeamos el resultado
    
    //---------------------------------------------------------------------------------------------------------------------------
    
        
    /*$conexion=$base->query("SELECT * FROM datosUsuarios");
    $registros=$conexion->fetchAll(PDO::FETCH_OBJ); */
    $registros=$base->query("SELECT * FROM datosUsuarios LIMIT $empezarDesde,$tamanoPaginas")->fetchAll(PDO::FETCH_OBJ);
    
    if(isset($_POST["cr"])){ //si pulsas el boton de crear...
        
        $nombre=$_POST["Nom"];
        
        $apellido=$_POST["Ape"];
        
        $direccion=$_POST["Dir"];
        
        $sql="INSERT INTO datosUsuarios (NOMBRE, APELLIDO, DIRECCION) VALUES (:nom, :ape, :dir)";
        
        $resultado=$base->prepare($sql);
        
        $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion));
    
        header("Location:index.php"); //para que refresque la pagina
    }
    

?>


<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  
  <table width="50%" border="0" align="center">
   
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
    
    
        
   <?php
   foreach ($registros as $persona) :   //por cada objeto $persona que hay en $registro, repite este bucle
   ?>
   	<tr>
      <td><?php echo $persona->ID ?> </td>
      <td><?php echo $persona->NOMBRE ?></td>
      <td><?php echo $persona->APELLIDO ?></td>
      <td><?php echo $persona->DIRECCION ?></td>
 
      <td class="bot"><a href="borrar.php?Id=<?php echo $persona->ID ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      
      <td class='bot'><a href="editar.php?Id=<?php echo $persona->ID ?> & nom=<?php echo $persona->NOMBRE ?> & 
      ape=<?php echo $persona->APELLIDO ?> & dir=<?php echo $persona->DIRECCION ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    
    </tr>    
    
    <?php 
        endforeach;
    ?>
    
    
    
       
	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>   
      <tr><td><?php 
//--------------------------PAGINACION(ver Paginacion_46)-----------------------------
   
   for($i=1; $i<=$totalPaginas; $i++){
       
       echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
       
       
   }
//--------------------------------------------------------------- 
?></td></tr>
  </table>
</form>


  
<p>&nbsp;</p>
</body>
</html>