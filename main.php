<?php
	/*
	--------------------------------テーマの名前-----------------------------------
		
	*/
	/*session_start();
	$user = $_SESSION['Usuario'];
	*/
	echo '<html>
	<head>
	<meta charset= "UTF-8"/>
		<title>デート</title>
		</head>
	<body>';
		/*echo '<h1>Seguridad</h1>
		<h2>Hola'.$user.'</h2>
			<a href="curp1.php">CURP</a><br/>
			<a href="VISA.php">Validacion de VISA</a><br/>
			<a href="https://github.com/PaolaCardoso/Pruebarepository">Practica 1</a><br/>
			<a href="SeguridadPrac2.php">Practica 2</a><br/>
			<a href="SeguridadPrac3.php">Practica 3</a><br/>
			<a href="SeguridadPrac4.php">Practica 4</a><br/>
			<a href="SeguridadPrac5.php">Practica 5</a><br/>
			<a href="SeguridadPrac6.php">Practica 6</a><br/>
			<a href="SeguridadPrac7.php">Practica 7</a><br/>
			<a href="SeguridadPrac8.php">Practica 8</a><br/>
			<a href="SeguridadPrac9.php">Practica 9</a><br/>*/
				session_start();
	if(isset($_COOKIE['sesionid']))
	{
		echo '<h1>Seguridad</h1>
		<h2>Hola'.$user.'</h2>
			<a href="SeguridadCURP.php">CURP</a><br/>
			<a href="SeguridadVISA.php">Validacion de VISA</a><br/>
			<a href="https://github.com/PaolaCardoso/Pruebarepository">Practica 1</a><br/>
			<a href="SeguridadPrac2.php">Practica 2</a><br/>
			<a href="SeguridadPrac3.php">Practica 3</a><br/>
			<a href="SeguridadPrac5.php">Practica 5</a><br/>
			<a href="SeguridadPrac6.php">Practica 6</a><br/>
			<a href="SeguridadPrac7.php">Practica 7</a><br/>
			<a href="SeguridadPrac8.php">Practica 8</a><br/>
			<a href="SeguridadPrac9.php">Practica 9</a><br/>
			
		<form  method="GET" action="cerrar.php">
			<input type = "submit" value = "cerrar_sesion" name = "close"/>
		</form>
			';

	}
	else
	{
		if(isset($_POST['user']) && isset($_POST['pwd']))
		{
			$enlace = mysqli_connect("localhost","root"," ","Usuarios");
			if(!$enlace)
			{
				echo 'No se pudo conectar';
				mysqli_connect_error();
			}
			$user = htmlspecialchars($_POST['user']);
			$pwd = htmlspecialchars($_POST['pwd']);
			$consulta = 'SELECT * FROM Users WHERE User = "'.mysqli_real_escape_string($enlace,$user).'"';
			$res=mysqli_query($enlace,$consulta);
			$row=mysqli_fetch_assoc($res);
			$pswbd = $row['Password'];
			$hash = hash('md5',$pwd);
			if($hash == $pswbd)
			{
				$_SESSION['Usuario'] = $row['User'];
				$user = $_SESSION['Usuario'];
				$hash1 = hash('md5',$user);
				setcookie('sesionid',$hash1,time()+3600);
				echo '<form  method="GET" action="main.php">
					<input type = "submit" value = "Iniciar" name = "inicio"/>
					</form>';
				mysqli_close($enlace);
			}
			else
			{
				echo 'Contraseña o usuario incorrecto';
				mysqli_close($enlace);
				echo '<a href="login.php">VOLVER A INGRESAR DATOS</a>';
			}
		}
		else
			echo 'No ingreso todos los datos<br/><a href="login.php">VOLVER A INGRESAR DATOS</a>';
	}
			
		echo'<form  method="GET" action="cerrar.php">
			<input type = "submit" value = "Cerrar Sesión" name = "Cerrar"/>
		</form>
			';
		
	echo '</body>	
	</html>';
?>