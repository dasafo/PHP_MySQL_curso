<?php
    
    class ProductosModelo{
        
        private $db;
        
        private $productos;
        
        public function __construct(){
            
            require_once ('modelo/Conectar.php');
            
            $this->db=Conectar::conexion();
            
            $this->productos=array();
            
        }
        
        public function getProductos(){
            
            $consulta=$this->db->query("SELECT * FROM PRODUCTOS"); 
            
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){ //pasamos el contenido de un array $consulta a otro $filas
                
                $this->productos[]=$filas;
                
            }
            
            return $this->productos;
            
        }
        
        
    }


		
?>
	
