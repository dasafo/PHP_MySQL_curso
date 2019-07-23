<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
   
   include_once("../modelo/ObjetoBlog.php");
   include_once("../modelo/ManejoObjetos.php");
   
   try{
       
       $miconexion=new PDO('mysql:host=localhost; dbname=bbddblog_php', 'root', 'Kromosoma_85');
       
       $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
      
   //Comprobar la conexión
   
   if(!$miconexion){
       
       echo "La Conexion ha fallado: " . mysqli_error();
       exit();
       
   }
   
   if($_FILES["imagen"]["error"]){
       
       switch ($_FILES["imagen"]["error"]){
           
           case 1: //Error exceso de tamaño de archovo php.ini
               
               echo "El tamaño del archivo excede lo permitido por el servidor";
               break;
               
           case 2: //Error tamaño archivo marcado desde formulario
               
               echo "El tamañño del archivo excede los 2Mb";
               break;
               
           case 3: //Corrupcion de archivo
               
               echo "El envío del archivo se interrumpió";
               break;
               
           case 4: //No hay fichero
               
               echo "No se ha enviado ningún archivo";
               
               break;
               
       }
       
       
   }else{
       
       echo "Entrada subida correctamente<br/>";
       
       if((isset($_FILES["imagen"]["name"]) && ($_FILES["imagen"]["error"]==UPLOAD_ERR_OK))){ //Si hay un archivo con su nombre, si no ha habido error entonces...
           
           $destinoRuta="../../../../../../ProyectoBlog_Procedimientos_53/imagenes/"; //Lo baja por defecto temporalmente en "/Documents/PHP/Curso/.metadata/.plugins/org.eclipse.wst.server.core/tmp0/htdocs/ProyectoBlogs/imagenes/
           //Lo guardamos en /Documents/PHP/Curso/ProyectoBlog_Procedimientos_53
           move_uploaded_file($_FILES["imagen"]["tmp_name"], $destinoRuta . $_FILES["imagen"]["name"]); //movemos el archivo del direcotrio temporal a $destinoRuta(imagenes) y el nombre de la imagen
           
           echo "El archivo " . $_FILES["imagen"]["name"] . " se ha copiado en el directorio imágenes.";
           
       }else{
           
           echo "El archivo no se ha podido copiar al directorio de imágenes";
       }
       
   }
   
   
   $ManejoObjetos=new ManejoObjetos($miconexion);
   
   $blog=new ObjetoBLog();
   
   $blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]), ENT_QUOTES));
   
   $blog->setFecha(Date("Y-m-d H:i:s"));
   
   $blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]), ENT_QUOTES));
   
   $blog->setImagen($_FILES["imagen"]["name"]);
   
   $ManejoObjetos->insertaContenido($blog);
   
   echo "<br/> Entrada de Blog agregada con éxito <br/>";
   
   
   
   }catch (Exception $e){
       
       die("Error: " . $e->getMessage());
   }
   
		
   ?>
	
</body>
    
</html>