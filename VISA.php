<?php
	$user = $_SESSION['Usuario'];
	if($_SESSION['Usuario'])	
	{
	
	
	echo '<html>
	<head>
		<title>デート</title>
		</head>
	<body>';
	if(isset ($_GET['visa']))
	{
		$visa=htmlspecialchars($_GET['visa']);
		$arr =str_split ($visa);
		$valor=2*$arr[0];
		$r=0;
		$i=1;
		for ($i=1;$i<16;$i++)
		{
			if($i%2==1){
				$val= $arr[$i];
				if($val>=10)
					$r=$r+$val;
				$valor=$valor+$val;
			}
			else{
				$val= $arr[$i];
				if($val>=10)
					$r=$r+$val;
				$valor=$valor+(2*$val);
			}
		}
		$res=-$valor-$r;
		echo abs($res%10);	
			
		
	}
	else
	{
	echo '
		<form method="GET" action="VISA.php">
			VISA:<input name="visa" type="text"/><br/>
			<button id="cifrar">Enviar</button>
		</form>';
	}	
	
		
		
	echo '</body>	
	</html>';
}
else
	header('Location: Seguridad.html');
?>