<?php 
    
    require "DevuelveProductos_38_III.php";
    
    $pais=$_GET["buscar"];
    
    $productos=new DevuelveProductos();
    
    $arrayProductos=$productos->getProductos($pais);




?>





<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
    
   foreach($arrayProductos as $elemento){
       
       echo "<table><tr><td>";
       echo $elemento['CÓDIGOARTÍCULO'] . "</td><td>";
       echo $elemento['NOMBREARTÍCULO'] . "</td><td>";
       echo $elemento['SECCIÓN'] . "</td><td>";
       echo $elemento['PRECIO'] . "</td><td>";
       echo $elemento['FECHA'] . "</td><td>";
       echo $elemento['IMPORTADO'] . "</td><td>";
       echo $elemento['PAÍSDEORIGEN'] . "</td><td></tr></table>";
       
       
       echo "<br>";
       echo "<br>";
   }
		
		
   ?>
	
</body>
    
</html>