<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
   
    include("../modelo/ManejoObjetos.php");
    
    try{
        
        $miconexion=new PDO('mysql:host=localhost; dbname=bbddblog_php', 'root', 'Kromosoma_85');
        
        $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $ManejoObjetos=new ManejoObjetos($miconexion);
        
        $tablaBlog=$ManejoObjetos->getContenidoPorFecha();
        
        if(empty($tablaBlog)){
            
            echo "No hay entradas de blog aún";
        }else{
            
            foreach ($tablaBlog as $valor){
                
                echo "<h3>" . $valor->getTitulo() . "</h3>";
                
                echo "<h4>" . $valor->getFecha() . "</h4>";
                
                echo "<div style='width:400px'>";
                echo $valor->getComentario() . "</div>";
                
                if($valor->getImagen()!=""){
                    
                    echo "<img src='../imagenes/'";
                                                             
                    echo $valor->getImagen() . "' width='300px' height=200px'/>";
                }
                
                echo "<hr/>";
                
            }
            
            
        }
        
    }catch (Exception $e){
        
        die("Error: " . $e->getMessage());
    }
           
   
   
		
   ?>
   
<br/>

<a href="Formulario.php">Volver a la página de inserccionn</a>
	
</body>
    
</html>