<?php
	$user = $_SESSION['Usuario'];
	if($_SESSION['Usuario'])	
	{
	
	echo '<html>
	<head>
		<title>デート</title>
		</head>
	<body>';
	if(isset ($_GET['nocta']))
	{
		$nocta=$_GET['nocta'];
		$dato=$_GET['dato'];
		 $arr =str_split ($nocta,3);
		if($dato==1)
		{
			foreach($arr as $elem)
			{
				$string=strrev($elem);
				echo $string;
			}
		}
		if($dato==2)
		{
			foreach($arr as $elem)
			{
				$string=strrev($elem);
				echo $string;
			}
		}
	}	
	else
	{
	echo '
		<form method="GET" action="SeguridadPrac3.php">
			Ingrese numero de cuenta<input name="nocta" type="text"/><br/>
			<input type="radio" name="dato" value="1"/>Codificar<br/>
			<input type="radio" name="dato" value="2"/>Cifrar<br/>
			<button>Enviar</button>
		</form>';
	}	
	
		
		
	echo '</body>	
	</html>';
}
else
	header('Location: Seguridad.html');
?>