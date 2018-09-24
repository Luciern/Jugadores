<?php





if(isset($_POST)&& count($_POST)>0){
	
	$conexion = new mysqli("localhost", "root", "", "nba");
	if($conexion->errno){
		echo "<div>Houbo un erro na conexion que se resumen en ".$conexion->error."</div>";
		die();
	}
	
	$nome = $_POST['nomeUsuario'];
	$correo = $_POST['emailUsuario'];
	$nacimiento = $_POST['nacimiento'];
	
	$consulta = "INSERT INTO suscripcion (nomeUsuario, emailUsuario) VALUES (\"$nome\",\"$correo\")";
	var_dump($consulta);
	
	$resultado = $conexion->query($consulta);
	if($conexion->errno){
		echo $conexion->error;
	}
}




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Formulario</title>
	<link rel="stylesheet" href="estilo.css" type="text/css" />
	<style>
	body{background-color: gray;}
	
	</style>
	
	
</head>

	<header>
		
<div>
	<img class="logo" src="logo.png"/>
	
	</div>

	</header>


	<body>
	
	<nav>
	<div>
		<ul>
			<li><h3>Menu 1</h3></li>
			<li><h3>Menu 2</h3></li>
			<li><h3>Menu 3</h3></li>
	
		</ul>
	
	</div>
	
</nav>
	

	<h3>Formulario de contacto</h3>
<div id="formulario">
<form  action="#" method="post">
	<div><label>Nombre </label><input name="nomeUsuario" /></div>
	<div><label>Correo Electrónico </label><input name="emailUsuario"/></div>
	<div>
	<label>Fecha de Nacimiento </label><input type="date" name="nacimiento"/>
	</div>
	<div> <input type="checkbox"/>
		<label> He leído las condiciones de uso </label>
	</div>
	<div>
		<input type="submit"/>
	</div>
</div>
	</form>

	
	
	
	
	</body>
	</html>