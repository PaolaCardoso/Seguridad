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
				
			$arr =str_split ($nocta);
			$num=count($arr);
			$valor=ord($arr[0]);
					for($i=1;$i<$num;$i++)
					{
						$val=ord($arr[$i]);
						$valor=$valor+$val;
					}
			echo $valor.'<br/>';
			
		/*
		--Funciones para hash----creo...
		var_dump (hash_algos ());
		echo '<br/>';
		echo hash("md5",$nocta).'<br/>';*/
	}
	else
	{
	echo '
		<form method="GET" action="SeguridadPrac8.php">
			Ingrese texto<input name="nocta" type="text"/><br/>
			<button id="cifrar">Enviar</button>
		</form>';
	}	
	
		
		
	echo '</body>	
	</html>';
}
else
	header('Location: Seguridad.html');
?>