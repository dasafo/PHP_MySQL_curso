<?php
    
    try{
        
        $base=new PDO('mysql:host=localhost; dbname=curso_php', 'root', 'Kromosoma_85');
        
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET utf8");
        
    }catch(Exception $e){
        
        die('Error' . $e->getMessage());
    
        echo "Línea del error: " . $e->getLine();
        
    }
    		
    
		
?>
	
