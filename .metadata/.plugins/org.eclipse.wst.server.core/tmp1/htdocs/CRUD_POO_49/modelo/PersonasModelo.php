<?php
    
    class PersonasModelo{
        
        private $db;
        
        private $personas;
        
        public function __construct(){
            
            require_once ('/modelo/Conectar.php');
            
            $this->db=Conectar::conexion();
            
            $this->personas=array();
            
        }
        
        public function getPersonas(){
            
            require("paginacion.php");
            
            $consulta=$this->db->query("SELECT * FROM datosUsuarios LIMIT $empezarDesde, $tamanoPaginas"); 
            
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){ //pasamos el contenido de un array $consulta a otro $filas
                
                $this->personas[]=$filas;
                
            }
            
            return $this->personas;
            
        }
        
        
    }


		
?>
	