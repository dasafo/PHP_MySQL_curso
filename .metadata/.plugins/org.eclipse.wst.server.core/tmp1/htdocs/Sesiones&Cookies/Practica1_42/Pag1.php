<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>

<?php 

if (isset($_COOKIE["Idioma_Seleccionado"])) {
    
        
    if($_COOKIE["Idioma_Seleccionado"]=="dl"){
        
        header("Location:deutsch.php");
        
        
    }else if($_COOKIE["Idioma_Seleccionado"]=="es"){
        
        header("Location:cuba.php");
        
        
    }
        
  }


?>
    
   <table width="25%" border="0" align="center">
   
   	<tr>
   		<td colspan="2" align="center"> <h1>Elige idioma</h1></td>
   	</tr>
   	<tr>
   		<td align="center"><a href="CreaCookie.php?idioma=dl"><img src="DDR.jpg" width="200" height="150"></a></td>
      	<td align="center"><a href="CreaCookie.php?idioma=es"><img src="Cuba.jpg" width="200" height="150"></a></td>
     </tr>
   
   </table>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
	
</body>
    
</html>