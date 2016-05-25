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
		$llave=$_GET['llave'];
		$arr =str_split($nocta);
		$arr2=str_split($llave);
		for ($i=0;$i<9;$i++)
		{
		if($arr[i]==$aar2[i])
			echo "0";
		else
			echo "1";
		}
	
	}	
	else
	{
	echo '
		<form method="GET" action="SeguridadPrac4.php">
			Ingrese numero de cuenta<input name="nocta" type="text"/><br/>
			Llave<input name="llave" type="text"/><br/>
			<button id="cifrar">Enviar</button>
		</form>';
	}	
	
		
		
	echo '</body>	
	</html>';
}
else
	header('Location: Seguridad.html');
?>