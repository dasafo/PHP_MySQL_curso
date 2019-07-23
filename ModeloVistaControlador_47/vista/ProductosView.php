<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>

<style type="text/css">

    td{
        border:1px dotted #FF0000;
        }


</style>


</head>

<body>

<table>

<tr><td>NOMBRE DEL ARTÍCULO</td></tr>


    
   <?php
    
   foreach ($matrizProductos as $registro){
       
       echo "<tr><td>" . $registro["NOMBREARTÍCULO"] . "</td></tr>";
   }
		
   ?>
   
</table>
	
</body>
    
</html>