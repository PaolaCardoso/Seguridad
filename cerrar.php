<?php
echo '<html>
	<head>
		<title>デート</title>
		<meta charset= "UTF-8"/>
		
		</head>
	<body>';

		session_start();
		if(isset($_SESSION['Usuario']))
			session_destroy();

		echo '<a href="Seguridad.html">VOLVER A INICIO</a>

		</body>	
</html>';
?>