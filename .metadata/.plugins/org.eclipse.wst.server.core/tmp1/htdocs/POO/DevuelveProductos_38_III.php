<?php

    require "conexion.php";
    
    class DevuelveProductos extends Conexion{
        
        public function DevuelveProductos() {
            
            parent::__construct(); //conectamos con el constructor padre 
            
        }
    
     //--------------------------Para conexion PDO----------------------------------------------
     
        public function getProductos($dato) {
            
            $sql="SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN='" . $dato . "'";
            
            $sentencia=$this->conexion_db->prepare($sql);
            
            $sentencia->execute(array());
            
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            
            $sentencia->closeCursor();
            
            return $resultado;
            
            $this->conexion_db=null;
        }
        
        
        
        
        
    //-----------------------------Para conexion con SQLI----------------------------------------- 
    
       /* public function getProductos($dato) {
            
            $resultado=$this->conexion_db->query('SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN="' . $dato . '"'); //consulta SQL
            
            $productos=$resultado->fetch_all(MYSQLI_ASSOC); //lo guardamos en un Array asociativo llamado producto
            
            return $resultado; //que nos devuelva el Array productos
            
        }*/
        
    //-----------------------------------------------------------------------------------------------
        
    }




    
?>
	
