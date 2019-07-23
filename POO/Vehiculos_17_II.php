    <?php
    
    class Coche{
        
        // private $ruedas; //con private encapsulamos la variable para que no pueda ser modificada por NINGUNA clase que este fuera de la clase Coche()
         protected $ruedas; //con protected encapsulamos la variable para que no pueda ser modificada fuera de la clase Coche(), pero si de clases que hereden de Coche()
        
        var $color;
        
        protected $motor;
        
        
        function Coche(){   //Metodo constructor y se encarga de dar un estado incial al objeto
            
            $this->ruedas=4;
            $this->color="";
            $this->motor=1600;
            
        }
    
            
        function arrancar() {
            
            echo "Estoy arrancando<br>";
            
        }
        
        function girar(){
            
            echo "Estoy girando<br>";
            
            
        }
        
        function frenar(){
            
            echo "Estoy frenando<br>";
            
        }
        
        function setColor($colorCoche,  $nombreCoche){ //Setter(establece)
            
            $this->color=$colorCoche;
            
            
            echo "El color de " . $nombreCoche . " es: " . $this->color . "<br>";
            
              }
              
        function getRuedas(){   //Getter(dame)
                  
            return $this->ruedas; //asi podemos acceder a la varieble ruedas, que se encuentra ecapsulada en esta clase Coche, desde otro sitio
              }
              
         function getMotor(){
                  
                  return $this->motor;
              }
          
              
        
                
    }
    
    //----------------------------------------------------------------------------------------
    
    class Camion extends Coche{ //Heredamos Camion de Coche con extends
        
        
        
        function Camion(){   //Metodo constructor y se encarga de dar un estado incial al objeto
            
            $this->ruedas=8;
            $this->color="gris";
            $this->motor=2600;
            
        }
        
        
        function setColor($colorCamion,  $nombreCamion){  //sobreescritura de metodos, reescribimo setColor, ya que tendrá otros argumentos en un Camción(en nuestro caso)
            
            $this->color=$colorCamion;
            
            echo "El color de " . $nombreCamion . " es: " . $this->color . "<br>";
            
            }
            
            
        function arrancar(){ //Ahora no sobrescribimos, sino que añadimos cosas al método de la superclase, en este caso de arrancar() de la superclase Coche()
                
            parent::arrancar(); //con parent le decimos que ejecute todo el método arrancar de la superclase Coche
            echo "Camión arrancado"; //y añamdimos esta linea de código
            }
        
        
        
               
        
    }
              

	?>
   