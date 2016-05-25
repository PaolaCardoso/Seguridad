<?php
	$user = $_SESSION['Usuario'];
	if($_SESSION['Usuario'])	
	{
	
	
	echo '<html>
	<head>
		<title>デート</title>
		</head>
	<body>';
	if(isset ($_GET['nom']))
	{
		$appat = htmlspecialchars($_GET['appat']);
		$apmat = htmlspecialchars($_GET['apmat']);
		$nom = htmlspecialchars($_GET['nom']);
		$sex = htmlspecialchars($_GET['sexo']);
		$date = htmlspecialchars($_GET['date']);
		$entidad = htmlspecialchars($_GET['entidad']);
		
		$appat1 = str_split($appat);
		$apmat1 = str_split($apmat);
		$nom1 = str_split($nom);
		$nomb = $appat1[0].$appat1[1].$apmat1[0].$nom1[0];
		strtoupper($nomb);
		$date1 =explode("-",$date);
		$año= str_split($date1[0],2);
		if($date1[0]<2000)
			$año1 = '0';
		else
			$año1 = 'A';
		
		$curp=$nomb.$año[1].$date1[1].$date1[2].$sex.$entidad.$appat1[2].$apmat1[2].$nom1[1].$año1;
		$curp=strtoupper($curp);
		
		function num ($num)
		{
			if($num==165)
			{
				$num=23;
				$n=num;
			}
			else
			{
				$n=$num-55;
				if($n>=23)
					$n++;
			}
			return $n;
		}
		$letra=0;
		$num=18;
		$arr =str_split ($curp);
		foreach ($arr as $elem){
			strtoupper($elem);
			if(is_numeric($elem))
			{
				$val=$elem;
			}
			else
			{
				$valor=ord($elem);
				$val=num($valor);
			}
			$x=$num*$val;
			$letra=$letra+$x;
			$x--;
		}
		$num2=abs($letra%10);
		echo $curp.$num2;
		
	}
	else
	{
	echo '
		<form action = "curp1.php" method = "GET">
			Apellido paterno:
			<input type = "text"  name = "appat" pattern = "^[A-z]${1,}"/><br/>
			Apellido materno: 
			<input type = "text"  name = "apmat" pattern = "^[A-z]${1,}" /><br/>
			Nombre: 
			<input type = "text"  name = "nom" pattern = "^[A-z]${1,}" /><br/>
			Sexo: <br/>
			Hombre: <input type = "radio" value = "H" name = "sexo" />
			Mujer: <input type = "radio" value = "M" name = "sexo" /><br/>
			Fecha de Nacimiento:  
			<input type="date" name="date" min="1950-01-01" max="2016-01-01"/><br/>
			Lugar de nacimiento: <select name = "entidad">';
			$array = array('AGUASCALIENTES','BAJA CALIFORNIA','BAJA CALIFORNIA SUR','CAMPECHE','COAHUILA DE ZARAGOZA','COLIMA',
			'CHIAPAS','CHIHUAHUA','DISTRITO FEDERAL','DURANGO','GUANAJUATO','GUERRERO','HIDALGO','JALISCO','MEXICO','MICHOACAN DE OCAMPO',
			'MORELOS','NAYARIT','NUEVO LEON','OAXACA','PUEBLA','QUERETARO DE ARTEAGA','QUINTANA ROO','SAN LUIS POTOSI','SINALOA',
			'SONORA','TABASCO','TAMAULIPAS','TLAXCALA','VERACRUZ','YUCATAN','ZACATECAS');
			$array1 = array('AS','BC','BS','CC','CL','CM','CS','CH','DF','DG','GT','GR','HG','JC','MC','MN','MS','NT','NL','OC','PL',
			'QT','QR','SP','SL','SR','TC','TS','TL','VZ','YN','ZS');
			for($x = 0; $x <= 32; $x++)
				echo '<option value = "'.$array1[$x].'">'.$array[$x].'</option>';
			echo '</select><br/>
			<input type = "submit" value = "Enviar" name = "Enviar"/><br/>
		</form>';
	}
	
				
	echo'</body>	
</html>';
}
else
	header('Location: Seguridad.html');
?>