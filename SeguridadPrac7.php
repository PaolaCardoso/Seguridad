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
			
				/*$arr =str_split($nocta);
				foreach ($arr as $elem){
					$valor=ord($elem);
					$array =str_split($valor);
					$num = count($array);
					if($num==3)
					{
						if($array[2]=="7")
						echo $val1;
					}	
					if($num==2){
						array_unshift($array, 0);
						$val=implode($array);
						echo $val
					}
				}*/
				
			$arr =str_split ($nocta,3);
					foreach($arr as $clave=>$elem)
					{
						if($clave%2==1)
						{
							echo "1234";
						}
						else
						{
						$string=strrev($elem);
						echo $string;
						}
					}
			
	}
	else
	{
	echo '
		<form method="GET" action="SeguridadPrac7.php">
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