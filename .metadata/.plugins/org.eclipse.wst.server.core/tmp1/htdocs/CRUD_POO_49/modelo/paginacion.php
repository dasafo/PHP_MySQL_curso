<?php

    require_once ("Conectar.php");
    
    $base=Conectar::conexion();

    $tamanoPaginas=3; //Para decirle cuantos registros por pagina queremos
    
    
    if(isset($_GET["pagina"])){ //pagina se define mas abajo, por eso le decimos que solo haga el segundo bucle if cuando pinche en la paginacion y no antes
        
        if($_GET["pagina"]==1){ //si te encuentras en la pagina 1...
            
            header("Location:index.php");
            
        }else{ //si no guardame en $pagina que numero es
            
            $pagina=$_GET["pagina"];
            
        }
        
    }else{ //sino ha dado clik al enlace de la paginacion entonces
        
        $pagina=1; //Nos dice la página que nos encontraremos cuando cargemos por primera vez la Web
        
    }
    
    $empezarDesde=($pagina-1)*$tamanoPaginas; //para almacenar el numero de registro con que empieza cada página
    
    $sqlTotal="SELECT * FROM datosUsuarios"; //hacemos una llamada SQL para saber cuantos registros nos devuelve la consulta
    
    $resultado=$base->prepare($sqlTotal);
    
    $resultado->execute(array());
    
    $numFilas=$resultado->rowCount(); //para que cuente las filas que tenemos dentro del array($resultado)
    
    $totalPaginas=ceil($numFilas/$tamanoPaginas); //PAra calcular las paginas que necesitaremos, con ceil() redondeamos el resultado
    


?>