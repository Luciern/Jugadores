<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Baloncesto</title>
<link rel="stylesheet" href="estilos.css" type="text/css"></link>	 

</head>

<body>
	<style>
body{background-color:lightblue;}
 



	</style>
<header>
	<div>
	<img width="50%" height="200px" class="logo" src="logo.png" />
	
	</div>

</header>
<nav>
	<div id="menu" style="border:1px solid black; width:50%; background-color:black;">
		<ul>
			<li style="color:red" ><h3>Menu 1</h3></li>
			<li style="color:red" ><h3>Menu 2</h3></li>
			<li style="color:red" ><h3>Menu 3</h3></li>
	
		</ul>
	
	</div>
	
</nav>


	
	<div>
	
	<?php
		
		$conexion = new mysqli("localhost","root","","nba");
		$consulta = "SELECT  nombre,ciudad,conferencia FROM equipos";
		
		$resultado = $conexion->query($consulta);
		
		
		
		$equipos=[];
		
		while($fila = $resultado->fetch_assoc()){
			array_push($equipos,$fila);
		}
			
		for($inicio = 0;$inicio < count($equipos);$inicio++){
			
			$equipo = $equipos[$inicio];
			
			echo '<a href="equipo.php?equipo='.$equipo['nombre'].'">';
			echo "<div> <p>";
			echo $equipo['nombre'];
			echo "</p>";
			echo "</div>";
			
			echo "<div id=equipo >";
			echo "<div  style=color:red; >";
			echo $equipo['ciudad'];
			echo "</p>";
			echo $equipo['conferencia'];
			echo "</div>";
			echo '</a>';
			echo "</div>";
		}
		  
		
		
		?>
	
		</div>
	

<section>

	
	
	

</section>

</body>

</html>