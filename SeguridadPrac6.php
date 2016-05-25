<?php
	$user = $_SESSION['Usuario'];
	if($_SESSION['Usuario'])	
	{
	
	echo '<html>
	<head>
		<title>デート</title>
		</head>
	<body>';
	function llave2($elem){
		$arr =str_split ($elem,3);
		foreach($arr as $elem)
			{
				$str=strrev($elem);
				echo $str;
			}
	}
	function llave($elem){
		$arr =str_split ($elem);
			$num=count($arr);
			$valor=ord($arr[0]);
					for($i=1;$i<$num;$i++)
					{
						$val=ord($arr[$i]);
						$valor=$valor+$val;
					}
				echo $valor;
		
		return $valor;
	}
	if(isset ($_GET['txt']))
	{
		$txt=$_GET['txt'];
		$dato=$_GET['dato'];
		$llave=$_GET['llave'];

		if($dato==1)
		{
			$key=llave($llave);
			if($key==920)
			{
				llave2($txt);
				
			}
			
		}
		else
		{
			if($llave==920)
			{
				llave2($txt);
				
			}
			
		}
		
		
		
	}	
	else
	{
	echo '
		<form method="GET" action="SeguridadPrac6.php">
			Ingrese texto <input name="txt" type="text"/><br/>
			Ingrese llave<input name="llave" type="text"/><br/>
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