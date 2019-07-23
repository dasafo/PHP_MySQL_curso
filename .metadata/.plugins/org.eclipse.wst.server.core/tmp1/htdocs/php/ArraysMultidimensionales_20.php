<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>
    <?php
    
        $alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                        "cítrico"=>"mandarina",
                                        "otros"=>"manzana"), 
                         "leche"=>array("animal"=>"vaca",
                                      "vegetal"=>"coco"),
                         "carne"=>array("vacuno"=>"lomo",
                                        "porcino"=>"pata")
            
                         );
        
       echo $alimentos["carne"]["vacuno"] . "<br><br><br>"; //Para acceder a 'lomo'
       
       //-------------------------Imprimimos 'a pelo' todo el Array multidimensional-----------------------
       
        foreach ($alimentos as $claveAlim=>$alim){ //$claveAlim asigna etiqueta a los elementos de la primera dimension, y $alim a los de la segunda
                
            echo "$claveAlim:<br>";
            
            while(list($clave, $valor)=each($alim)){ //le decimos que por cada $alim, lo desdoble en su $clave y su $valor, y lo haga mientras tengamos elementos en la lista(list())
                
                echo "$clave=$valor<br>";
            }
            
            echo "<br>";
        }
        
        //---------------------Usamos una funcio predefinida(var_dump() para hacer lo mismo-------------------------
        
        echo var_dump($alimentos);

	?>
    </body>

</html>