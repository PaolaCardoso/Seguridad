<?php
	/*
	--------------------------------テーマの名前-----------------------------------
		
	*/
	
	echo '<html>
	<head>
	<meta charset= "UTF-8"/>
		<title>デート</title>
		</head>
	<body>';
		echo '<form method="POST" action="main.php">
			<p><label for="user">Nombre de Usuario</label><input id="user" name="user" maxlength="30" type="text"/></p>
			<p><label for="pwd">Contraseña:</label><input id="pwd" name="pwd" maxlength="30" type="password"/></p>
			<input id="fname" name="secret" value="" type="hidden"/>
			<button type "submit">Ingresar</button>
		</form>';
		
		
		
	echo '</body>	
	</html>';
?>