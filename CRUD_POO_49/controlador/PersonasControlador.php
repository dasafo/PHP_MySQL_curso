<?php
    
    require_once ("/modelo/PersonasModelo.php"); 
    
    $persona=new PersonasModelo();
    $matrizPersonas=$persona->getPersonas();
    
    
    require_once ("/vista/PersonasView.php");
    
    

		
		
?>
	
