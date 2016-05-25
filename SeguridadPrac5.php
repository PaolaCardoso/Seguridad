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
			if($dato==1)
			{
				$arr =str_split($nocta);
				foreach ($arr as $elem){
					$valor=ord($elem);
					$array =str_split($valor);
					$num = count($array);
					if($num==3)
						echo $valor;
					if($num==2){
						array_unshift($array, 0);
						$val=implode($array);
						echo $val;
					}
				}
			}
			else
			{
				$arr =str_split($nocta,3);
				foreach ($arr as $elem){
					$array =str_split($elem);
					$val=array_shift($array);
					if ($val==0)
					{
						$valor=implode($array);
							echo chr($valor);
					}
					else
						echo chr($elem);
				}
			}
		}*/
		
	if(isset ($_GET['nocta']))
	{
		$nocta=$_GET['nocta'];
		$dato=$_GET['dato'];
		$llave=$_GET['llave'];
			if($dato==1)
			{
				$arr =str_split ($nocta);
				$num = count($arr);
				$arr1 =str_split ($llave);
				$num1 = count($arr1);
				if($num1%2!=1)
				{
					$arr3 =str_split ($nocta,3);
					foreach($arr3 as $elem)
					{
						$string=strrev($elem);
						echo $string;
					}
				}
				else
				{
					$num3=$num/2;
					$arr3 =str_split ($nocta,$num3);
						echo $arr3[1];
						echo $arr3[0];
					
				}
			}
			else
			{
				$arr =str_split ($nocta);
				$num = count($arr);
				$arr1 =str_split ($llave);
				$num1 = count($arr1);
				if($num1%2!=1)
				{
					$arr3 =str_split ($nocta,3);
					foreach($arr3 as $elem)
					{
						$string=strrev($elem);
						echo $string;
					}
				}
				else
				{
					$num3=$num/2;
					$arr3 =str_split ($nocta,$num3);
						echo $arr3[1];
						echo $arr3[0];
					
				}
				
			}
	}
	else
	{
	echo '
		<form method="GET" action="SeguridadPrac5.php">
			Ingrese texto<input name="nocta" type="text"/><br/>
			Ingrese llave<input name="llave" type="text"/><br/>
			<input type="radio" name="dato" value="1"/>Codificar<br/>
			<input type="radio" name="dato" value="2"/>Cifrar<br/>
			<button id="cifrar">Enviar</button>
		</form>';
	}	
	
		
		
	echo '</body>	
	</html>';
	}
else
	header('Location: Seguridad.html');
?>