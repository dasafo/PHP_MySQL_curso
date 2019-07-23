<?php
    
    class ObjetoBLog{
        
        
     //Propiedades
        private $Id;
        private $Titulo;
        private $Fecha;
        private $Comentario;
        private $Imagen;
        
     //---------------Metodos de acceso Getters y Setters----------------------
        public function getId(){
            
            return $this->Id;
            
        }
        
        public function setId(){
            
            $this->Id=$Id;
        }
        
        public function getTitulo(){
            
            return $this->Titulo;
            
        }
        
        public function setTitulo(){
            
            $this->Titulo=$Titulo;
        }
        
        public function getFecha(){
            
            return $this->Fecha;
            
        }
        
        public function setFecha(){
            
            $this->Fecha=$Fecha;
        }
        
        public function getComentario(){
            
            return $this->Comentario;
            
        }
        
        public function setComentario(){
            
            $this->Comentario=$Comentario;
        }
        
        public function getImagen(){
            
            return $this->Imagen;
            
        }
        
        public function setImagen(){
            
            $this->Imagen=$Imagen;
        }
        //----------------------------------------------------------------------
        
        
        
        
        
    }

		
?>
	
