<?php
$user = $_SESSION['Usuario'];
	if($_SESSION['Usuario'])	
	{
	echo '<html>
	<head>
		<title>デート</title>
		</head>
	<body>';
	
	if(isset ($_GET['txt']))
	{
		function arr ($val)
		{
			$arr =str_split($val);	
		}
		
		$txt=htmlspecialchars($_GET['txt']);
		$arr =str_split ($txt);
		$num =count($arr);
		$div=$num/4;
		$n=ceil($div);
		$var= $n*4;
		while ($num!=$var)
		{
			array_push($arr," ");
			$num++;
		}
		$txt=implode($arr);
		$array =str_split ($txt,$n);
		$arr = $array[0];
			$arr1 = str_split($arr);
		$arr = $array[1];
			$arr2 = str_split($arr);
		$arr = $array[2];
			$arr3 = str_split($arr);
		$arr = $array[3];
			$arr4 = str_split($arr);
		for($i=0;$i<$n;$i++)
		{
			echo $arr1[$i].$arr2[$i].$arr3[$i].$arr4[$i];
		}
		
	}
	else
	{
	echo '
		<form method="GET" action="SeguridadPrac2.php">
			Ingrese texto<input name="txt" type="text"/><br/>
			<button id="cifrar">Enviar</button>
		</form>';
	}	
	
		
		
	echo '</body>	
	</html>';
}
else
	header('Location: Seguridad.html');

?>