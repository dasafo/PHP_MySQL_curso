<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
    
       $miconexion=mysqli_connect("localhost", "root", "Kromosoma_85", "bbddblog_php");
       
       //Comprobar la conexión
       
       if(!$miconexion){
           
           echo "La Conexion ha fallado: " . mysqli_error();
           exit();
           
       }
       
       $miconsulta="SELECT * FROM contenido ORDER BY FECHA DESC";
       
       if($resultado=mysqli_query($miconexion, $miconsulta)){
           
           while($registro=mysqli_fetch_assoc($resultado)){
               
               echo "<h3>" . $registro["TITULO"] . "</h3>";
               echo "<h4>" . $registro["FECHA"] . "</h4>";
               echo "<div style='width:400px'>" . $registro["COMENTARIO"] . "</div><br/><br/>";
               
               if($registro["IMAGEN"]!=""){
                   
                   echo "<img src='/imagenes" . $registro['IMAGEN'] . "' width='300px' />";
               }
               
               echo "<hr/>";
               
               
           }
       }
           
           
   
   
		
   ?>
	
</body>
    
</html>