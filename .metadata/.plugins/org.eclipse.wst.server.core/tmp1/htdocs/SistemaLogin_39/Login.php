<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>

<style>

    h1{
        text-align:center;
       }
       
    table{
        
        width:25%;
        background-color:#04B4AE;
        border: 2px dotted #F00;
        margin:auto;
        
       }
       
       .izq{
            text-align:right;
            }
            
       .der{
            text-align:left;
            }
       td{
            text-align:center;
            padding:10px;
       }






</style>




</head>

<body>

<h1>INTRODUCE TUS DATOS</h1>

<form action="CompruebaLogin.php" method="post">

<table>
<tr>
<td class="izq">

Login: </td><td class="der"><input type="text" name="login"></td></tr>

<tr><td class="der"> Password: </td><td class="der"><input type="password" name="password"></td></tr>

<tr><td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td></tr>


</table>


</form>
    
   <?php
    
		
		
   ?>
	
</body>
    
</html>