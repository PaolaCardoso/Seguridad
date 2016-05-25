<?php
	/*
	--------------------------------テーマの名前-----------------------------------
		
	*/
	
	echo '<html>
	<head>
	<meta charset= "UTF-8"/>
		<title>デート</title>
		</head>
	<body>';
	if(isset($_POST['hidden']))
	{
		
		$user = htmlspecialchars($_POST['user']);
		$pwd = htmlspecialchars($_POST['pwd']);
		if(preg_match('/[A-z]{1,30}/',$user))
		{
			if(preg_match('/^(?=.*[A-z])(?=.*\d).{1,30}$/',$pwd))
			{
				$enlace = mysqli_connect("localhost","root"," ","Usuarios");
				if(!$enlace)
				{
					echo 'No se pudo conectar';
					mysqli_connect_error();
				}
				$consulta = 'SELECT * FROM Users WHERE User = "'.mysqli_real_escape_string($conexion,$user).'"';
				$res=mysqli_query($enlace,$consulta);
				$row=mysqli_fetch_assoc($res);
					
				$num = mysqli_num_rows($res);
				$hash = hash('md5',$pwd);
					
				if($num == 0)
				{
					$insert = "INSERT INTO User VALUES('','".mysqli_real_escape_string($conexion,$user)."','".mysqli_real_escape_string($conexion,$hash)."')";
					mysqli_query($conexion,$insert);
					echo '<h2>Se ha creado la cuenta</h2>';
					echo '<a href="login.php">Ingresar</a>';
					mysqli_close($conexion);
				}
				else
				{
					echo '<h2>Ya existe el nombre de usuario que introduciste</h2>';
					echo '<a href="registro.php">VOLVER A INGRESAR CONTRASEÑA</a>';
					mysqli_close($conexion);
				}
			}
			else
			{
				echo '<h2>Contraseña incorrecta</h2>';
				echo '<a href="registro.php">VOLVER A INGRESAR CONTRASEÑA</a>';
			}
		}
		else
		{
			echo '<h2>Usuario incorrecto</h2>';
			echo '<a href="registro.php">VOLVER A INGRESAR USUARIO</a>';
		}
		
	}
	else
	{
		echo '<form method="POST" action="registro.php">
			<p><label for="user">Nombre de Usuario</label><input id="user" name="user" maxlength="30" type="text"/><br/>Solo letras<br/></p>
			<p><label for="pwd">Contraseña:</label><input id="pwd" name="pwd" maxlength="30" type="password"/><br/>Solo letras y numeros<br/></p>
			<input name="hidden" value="123456789" type="hidden"/>
			<button type "submit">Enviar</button>
		</form>';
	}	
		
		
	echo '</body>	
	</html>';
?>