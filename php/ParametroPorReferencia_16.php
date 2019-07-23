<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>
    <?php
    
    
    //function incrementa($valor1){
    function incrementa(&$valor1){ //usando & le decimos que el argumento que recibe es por referencia, vinculamos directamente el valor cuando llamamos a la funcion
        
        $valor1++; //con & el $numero=$valor1.
        
        return $valor1;
    }
    
    $numero=5;
    
    echo incrementa($numero) . "<br>";
    
    echo $numero ."<br><br>"; //nos impimira con el nuevo valor de incrementa() por usar el &
    
    
    
    
    //function cambiaMayus($param) {
    function cambiaMayus(&$param) { //con & por referencia
        
        $param=strtolower($param); //pasamos primero a minusculas
        
        $param=ucwords($param); //despues ponemos la primera letra de cada palabra en mayuscula
        
        return $param;
        
    }
    
    $cadena="hOlA mUnDo";
    
    echo cambiaMayus($cadena) . "<br>";
    echo $cadena;
        
        

	?>
    </body>

</html>