<?php

    require 'conexion.php';
    
    class DevuelveProductos extends Conexion{
        
        public function DevuelveProductos() {
            
            parent::__construct(); //conectamos con el constructor padre 
            
        }
        
        public function getProductos() {
            
            $resultado=$this->conexion_db->query('SELECT * FROM PRODUCTOS'); //consulta SQL
            
            $productos=$resultado->fetch_all(MYSQLI_ASSOC); //lo guardamos en un Array asociativo llamado producto
            
            return $productos; //que nos devuelva el Array productos
            
        }
        
    }




    
?>
	
