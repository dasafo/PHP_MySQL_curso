<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
   
    $busquedaCart=$_POST["c_art"];
    
       try{
           
           $base=new PDO('mysql:host=localhost; dbname=curso_php', 'root', 'Kromosoma_85');
           
           $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Para que genere el objeto del error que nos saldrá en el catch, sino nos nos saldrá nada si se produce un error cuando sea llamado por $e
           
           $base->exec("SET CHARACTER SET utf8");
           
           $sql="DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO= :c_art";
           
           
           $resultado=$base->prepare($sql);
           
           $resultado->execute(array(":c_art"=>$busquedaCart));
           
           echo "Registro ELIMINADO";
                     
           $resultado->closeCursor(); //cerramos la lista
           
                                 
       }catch(Exception $e){
           
           die('Error en la Conexion: ' . $e->getMessage() . '<br>' . 'Código del error: ' . $e->getCode(). '<br>'. 'Línea del error: ' . $e->getLine(). '<br>');
           
           
       }finally{
           
           $base=null; //para que vacie la memoria
       }
		
		
   ?>
	
</body>
    
</html>