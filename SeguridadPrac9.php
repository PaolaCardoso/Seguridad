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
			$arr =str_split ($nocta);
			if($dato=='10')
			{
				$valor=$arr[0];
					for ($i=2; $i>9;$i++){
						$val= $arr[$i-1];
						$valor=$valor+$i($val);
					}
					echo abs($valor%11);	
			}
			else
			{
				$valor=$arr[0];
				$i=1;
					for ($i=1;$i<11;$i++)
					{
						if($i%2==1){
							$val= $arr[$i];
							$valor=$valor+$val;
						}
						else{
							$val= $arr[$i];
							$valor=$valor+(3*$val);
						}
					}
					$res=10-$valor;
					echo abs($res%10);	
			}
			//echo $valor.'<br/>';
			/*$res=10-($arr[0]+(3*$arr[1])+$arr[2]+(3*$arr[3])+$arr[4]+(3*$arr[5])+$arr[6]+(3*$arr[7])$arr[8]+(3*$arr[9])+$arr[10]+(3*$arr[11]));
				echo $res%10;
			}*/
	}
	else
	{
	echo '
		<form method="GET" action="SeguridadPrac9.php">
			Ingrese texto<input name="nocta" type="text"/><br/>
			<input type="radio" name="dato" value="10"/>10<br/>
			<input type="radio" name="dato" value="13"/>13<br/>
			<button id="cifrar">Enviar</button>
		</form>';
	}	
	
		
		
	echo '</body>	
	</html>';
	}
else
	header('Location: Seguridad.html');
?>