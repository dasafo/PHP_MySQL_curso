<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php


       if (isset($_POST["enviando"])) {
    
            $contra=$_POST["contra_usuario"];
            $edad=$_POST["edad_usuario"];
            $nombre=$_POST["nombre_usuario"];
            
            switch (true){
                
                case $nombre=="David" && $contra=="1111":
                    echo "Usuario autorizado. Hola David";
                    
                    break;
                    
                case $nombre=="María" && $contra=="2222":
                    echo "Usuario autorizado. Hola María";
                   
                    break;
                    
                case $nombre=="Ana" && $contra=="3333":
                    echo "Usuario autorizado. Hola Ana";
                    
                    break;
                    
                default:
                    
                    echo "Usuario no autorizado";
                
            }
            
            switch (true){
                
                case $edad<=18:
                    echo "<br>Eres menor de edad";
                    
                    break;
                    
                case $edad<=40:
                    echo "<br>Eres viejojoven";
                    
                    break;
                    
                case $edad<=65:
                    echo "<br>Eres mayorcete";
                    
                    break;
                    
                default:
                    
                    echo "<br>Hueles a tierra. Cuidate!!";
                    
            }
       



    
    /*if (isset($_POST["enviando"])) {
    
        $edad=$_POST["edad_usuario"];
        
        if($edad<=18){
            
            echo "Eres menor de edad";
            
        }else if($edad<=40){
            
            echo "Eres joven";
            
        }else if($edad<=65){
            
            echo "Eres mayorcete";
        }else{
            
            echo "Hueles a tierra, cuídate!!";
        }
    
    }*/

//-------------------------------------------------------------------------------------------------------------------

   /* if (isset($_POST["enviando"])) {
    
        $contra=$_POST["contra"]; //atributo contra que tenemos en 'name' de Condicionales_12_I
        
        $nombre=$_POST["nombre_usuario"]; //atributo nombre_usuario que tenemos en 'name' de Condicionales_12_I*/
        
        //------------3 ejempos que hacen lo mismo-------------
        
        /*if($edad<18){
            
            echo "Eres menor de edad. Acceso Denegado.";
            
        }else{
            
            echo "Eres mayor de edad. Palante!";
        }*/
        
        
       // echo $edad<18 ? "Eres menor de edad. Acceso Denegado" : "Palante!!";
       
        
        /*$resultado= $edad<18 ? "Eres menor de edad. Acceso Denegado" : "Palante!!";
        echo $resultado;*/
        
        //----------------------------------------------------------
        
        //Para aplicar lo de abajo hay que cambiar el nombre de Edad por contra(cOntraseña) en Condicionales_12_I
        /*$resultado= $nombre=="David" && $contra=="1234" ? "Acceso Permitido" : "Acceso Denegado";
        echo $resultado;*/
    
    
    }
    
    
    

	
?>