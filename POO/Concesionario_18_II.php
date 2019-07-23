<?php

	class Compra_vehiculo{
		
		private $precio_base;
		
		private static $ayuda=0; //el campo static hace que todas las instancias tengan el mismo valor de 'ayuda', independientemente de la instancia(Antonio, Ana,..) creada
		
		
				
		function Compra_vehiculo($gama){ //Constructor
			
			if($gama=="urbano"){
				
					$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
					$this->precio_base=20000;	
				
			}else if($gama=="berlina"){
				
					$this->precio_base=30000;	
				
			}		
			
			
		}// fin constructor
		
		
		
		
		function climatizador(){		
			
			
				$this->precio_base+=2000;					
			
			
		}// fin climatizador
		
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		
		
		function tapiceria_cuero($color){
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			
			else if($color=="beige"){
				
				$this->precio_base+=3500;
				
			}
			
			else{
				
				$this->precio_base+=5000;
				
			}
			
		}// fin tapicería
		
		
		
		function precio_final(){
			
			$valor_final=$this-> precio_base - self::$ayuda; //This hace referencia al objeto(Antonio,Ana,..), pero 'ayuda' es independiente(static), por eso se pone self::
			
			return $valor_final;	
			
		}// fin precio final
		
		
		
		static function descuentoGobierno() { //creamos una funcion statica
		    
		    if(date("m-d-y")>"05-01-19"){
		       	       	  	    
		    self::$ayuda=4500;
		    
		    }
		}
		
		
		
	}// fin clase


?>