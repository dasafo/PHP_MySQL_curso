<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
   
   try{
       
    $base=new PDO('mysql:host=localhost; dbname=curso_php', 'root', 'Kromosoma_85');
    
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexión OK!!";
    
   }catch(Exception $e){
       
       die('ERROR en la conexión: ' . $e->getMessage());
       
   }finally{
       
       $base=null; //para que vacie la memoria
   }
    
    
		
		
   ?>
	
</body>
    
</html>