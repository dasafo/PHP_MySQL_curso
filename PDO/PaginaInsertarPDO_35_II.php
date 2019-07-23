<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
   
    $busquedaCart=$_POST["c_art"];
    $busquedaSec=$_POST["seccion"];
    $busquedaNart=$_POST["n_art"];
    $busquedaPrecio=$_POST["precio"];
    $busquedaFecha=$_POST["fecha"];
    $busquedaImportado=$_POST["importado"];
    $busquedaPorig=$_POST["p_orig"];
    
       try{
           
           $base=new PDO('mysql:host=localhost; dbname=curso_php', 'root', 'Kromosoma_85');
           
           $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Para que genere el objeto del error que nos saldrá en el catch, sino nos nos saldrá nada si se produce un error cuando sea llamado por $e
           
           $base->exec("SET CHARACTER SET utf8");
           
           $sql="INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) 
                    VALUES (:c_art, :seccion, :n_art, :precio, :fecha, :importado, :p_orig)";
           
           
           $resultado=$base->prepare($sql);
           
           $resultado->execute(array(":c_art"=>$busquedaCart, ":seccion"=>$busquedaSec, ":n_art"=>$busquedaNart,
               ":precio"=>$busquedaPrecio, ":fecha"=>$busquedaFecha, ":importado"=>$busquedaImportado, ":p_orig"=>$busquedaPorig));
           
           echo "Registro INSERTADO";
                     
           $resultado->closeCursor(); //cerramos la lista
           
                                 
       }catch(Exception $e){
           
           die('Error en la Conexion: ' . $e->getMessage() . '<br>' . 'Código del error: ' . $e->getCode(). '<br>'. 'Línea del error: ' . $e->getLine(). '<br>');
           
           
       }finally{
           
           $base=null; //para que vacie la memoria
       }
		
		
   ?>
	
</body>
    
</html>