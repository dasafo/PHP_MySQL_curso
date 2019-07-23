<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
    <body>
    <?php
    
        //------------------------------Array indexado------------------------------------------------------------
        
       /* $semana[]="Lunes";
        $semana[]="Martes";
        $semana[]="Miércoles";*/
    
        $semana=array("Lunes", "Martes", "Miercoles", "Jueves");
        
        echo $semana[2] . "<br>";
        
        //-----Array asocietivo(se ponen etiquetas a las posiciones(0,1,2,...) para luego hacer las llamadas--------
        
        $datos=array("Nombre"=>"Juan", "Apellido"=>"Pérez", "Edad"=>25); //En este caso damos a la primera posion(0) del Array el nombre de Nombre y almacenamos el String Juan, y el resto igual
        
        echo $datos["Apellido"] . "<br>";
        
        echo "<br><br>";
        
        
        //-------------------------------------------------------------------------------------------------------------
        
        
        if(is_array($datos)){ //is_array() para que nos diga si $datos es un Array o no
            
            echo "Es un Array<br>";
        }else{
            
            echo "No es un Array<br>";
        }
        
        echo "<br><br>";
        
        //----------------------------------Para recorrer un Array indexado----------------------------------------
        
        for ($i = 0; $i < count($semana); $i++) { //con count() cuenta el numero de elementos del Array
            
            echo $semana[$i] . "<br>";
            
        }
        
        echo "<br>";
        
        $semana[]="Viernes"; //añadimos una posicion al Array que será leido en el segundo for()
        
        for ($i = 0; $i < count($semana); $i++) { //con count() cuenta el numero de elementos del Array
            
            echo $semana[$i] . "<br>";
            
        }
        echo "<br><br>";
        
        //----------------------------------Para recorrer un Array asociativo---------------------------------------
        
        $datos["País"]="Francia"; //añadimos una posion al Array
        
        foreach ($datos as $clave=>$valor){ //Con $clave damos una etiqueta a las claves de las posiciones y con $valor a el contenido dentro de esas posiciones
            
            echo "A $clave le corresponde $valor <br>";
            
        }
        
        echo "<br><br>";
        
        //------------------------------Ordenar elementos de un Array-----------------------------------
        
        sort($semana); //Con Sort() ordena el Array alfabéticamente
        
        for ($i = 0; $i < count($semana); $i++) {
            
            echo $semana[$i] . "<br>";
            
        }
        

	?>
    </body>

</html>