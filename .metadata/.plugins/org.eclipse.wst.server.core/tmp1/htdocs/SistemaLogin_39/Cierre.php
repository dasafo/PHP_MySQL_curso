<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>
    
   <?php
    
        session_start();
        session_destroy();
        
        header("location:Login.php");
		
		
   ?>
	
</body>
    
</html>