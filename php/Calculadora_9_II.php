<style>

.resultado{

    color:#F00;
    font-size:32px;
    font-weight:bold;


}

</style>



<?php 

    /* Esto hay que desactivarlo para que funciones OperadoresMAtematicos_9_I.html, se desactiva para OperadoresIncDecr_9_III.php
      
      if(isset($_POST["button"])){
    
        $numero1=$_POST["num1"];
        $numero2=$_POST["num2"];
        $operacion=$_POST["operacion"];
        
        calcular($operacion);
        
    }
     
     */
   
    
    function calcular($calculo){
    
        if(!strcmp("Suma", $calculo)){
            
            global $numero1;
            global $numero2;
            
            $resultado=$numero1+$numero2;
        
            echo "<p class='resultado'>El resultado de la suma es: $resultado</p>";
        }
    
        if(!strcmp("Resta", $calculo)){
            
            global $numero1;
            global $numero2;
        
            $resultado=$numero1-$numero2;
            
            echo "<p class='resultado'>El resultado de la resta es: $resultado</p>";
        }
    
        if(!strcmp("Multiplicación", $calculo)){
            
            global $numero1;
            global $numero2;
        
            $resultado=$numero1*$numero2;
            
            echo "<p class='resultado'>El resultado de la multiplicación es: $resultado</p>";
        }
    
        if(!strcmp("División", $calculo)){
            
            global $numero1;
            global $numero2;
        
            $resultado=$numero1/$numero2;
            
            echo "<p class='resultado'>El resultado de la división es: $resultado</p>";
        }
    
        if(!strcmp("Módulo", $calculo)){
            
            global $numero1;
            global $numero2;
        
            $resultado=$numero1 % $numero2;
            
            echo "<p class='resultado'>El resultado del resto de la división es: $resultado</p>";
        }
            
        if(!strcmp("Incremento", $calculo)){
                
           global $numero1;
           
           $numero1++;
                
           $resultado=$numero1;
                
           echo "<p class='resultado'>El resultado del incremento es: $resultado</p>";
        }
                
         if(!strcmp("Decremento", $calculo)){
                    
           global $numero1;
          
           $numero1--;
                    
           $resultado=$numero1;
                    
           echo "<p class='resultado'>El resultado del decremento es: $resultado</p>";
         }
    
    }
        
    
?>
    