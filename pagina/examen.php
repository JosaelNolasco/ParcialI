<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">
<head>
	<title>COCA KOLA</title>
	<meta charset="utf-8" />
	<meta name="description" content="variable en php"/>
	<meta name="keywords" content=HTML,CSS." />
	<meta name="author" content="Tec. Martinez" />
	<link rel="icon" href=""/>
	// <link rel="stylesheet" href="../CSS/pacial.css" media="screen" />
	<link href="../css/parcial.css" TYPE="text/css" rel="stylesheet"/>
	<link rel="alternate" type="" />
</head>
<body align="Center">
	<div id="contenedor">
		<div id="encabezado">
			<h1 align="Center">COCA KOLA</h1>
		</div>
	<div id="menus">
	<ul>
		<li id="navi01"><a href="../Inicio.php">Inicio</a></li>
		<li id="navi02"><a href="##">contactenos</a></li>
	</ul>
	</div>
<div align="Center">
	<form name="form1" method="post" action="" class="contacto" align="Center">
	<br />
	<p>Nombre
	<input type="text" name="nombre" value="" size="20" maxlength="30" />
	</p><br />
	<p>Sueldo
	<input type="text" name="sueldo" value="" size="5" maxlength="80" />
	</p><br />
	<p>Edad Actual
	<input type="text" name="edad" value="" size="5" maxlength="10" />
	</p><br />
	<p>A&ntilde;os Laborales
	<input type="text" name="laboral" value="" size="5" maxlength="10" />
	</p><br />
		<input type="submit" name="enviar" value="PROCESAR" />
		<input type="reset" name="limpiar" value="LIMPIAR" />
		<br /><br />
	</form>
</div>
	<div id="pie">
	<p id="fin">Derechos Reservadors - UGB PROGRAMACION CSS</p>
	</div>
	</div>
	
	</body>
</html>
<?php
	if(isset($_POST['enviar'])=="Guardar")
	{
			//Declarar Variable
			$nombre = $_POST['nombre'];
			$sueldo = $_POST['sueldo'];
			$edadactual = $_POST['edad'];
			$Laboral1 = $_POST['laboral'];
			$Resul = "";
			$Forma = "<link href='../css/parcial.css' TYPE='text/css' rel='stylesheet'>";
			$div1 = "<div id='contenedor' align='Center'><h2>";
			$div2 = "</h2></div>";
			//
					
			if($edadactual >="60" & $Laboral1 < "25" )
			 {
				$resultado1 = (($sueldo * 0.20 ) + 275);
				echo $div1."Nombre: ".$nombre."<br> Con sueldo de: $".$sueldo."<br>Con una edad actual de: ".$edadactual." a&ntilde;os<br>
				Con tiempo laborado de: ".$Laboral1." a&ntilde;os <br> Tipo de Jubilando: Edad <br>Con una jubilacion de: $ ".$resultado1."<br>".$div2;
				$Resul= $Forma.$div1."Nombre: ".$nombre."<br> Con sueldo de: $".$sueldo." <br>Con una edad actual de: ".$edadactual." a&ntilde;os 
				<br> Con tiempo laboral de: ".$Laboral1." a&ntilde;os <br> Tipo de Jubilando: por Edad <br> 
				con una Jubilacion de: $ ".$resultado1."<br>".$div2;
			}
			 elseif($edadactual <="60" & $Laboral1 >= "25" )
			 {
				$resultado1 = (($sueldo * 0.40 ) + 200);
				echo $div1."Nombre: ".$nombre."<br> Con sueldo de: $".$sueldo."<br>Con una edad actual de: ".$edadactual."<br>
				Con tiempo laborado de: ".$Laboral1."<br> Se esta Jubilando por Antiguedad Joven, con una jubilacion de: $ ".$resultado1."<br>".$div2;
				$Resul = $Forma.$div1."Nombre: ".$nombre."<br> Con sueldo de: $".$sueldo." <br>Con una edad actual de: ".$edadactual." a&ntilde;os
				<br> Con tiempo laboral de: ".$Laboral1." a&ntilde;os <br> Tipo de Jubilando: por Antiguedad Joven <br>
				Con una Jubilacion de: $ ".$resultado1."<br>".$div2;
			 }
			 elseif($edadactual >="60" & $Laboral1 >= "25" )
			 {
				$resultado1 = (($sueldo * 0.10 ) + 300);
				echo $div1."Nombre: ".$nombre."<br> Con sueldo de: $".$sueldo."<br>Con una edad actual de: ".$edadactual."<br>
				Con tiempo laborado de: ".$Laboral1."<br> Se esta Jubilando por Antiguedad Adulta, con una jubilacion de: $ ".$resultado1."<br>".$div2;
				$Resul = $Forma.$div1."Nombre: ".$nombre."<br> Con sueldo de: $".$sueldo." <br> Con una edad actual de: ".$edadactual." a&ntilde;os
				<br> Con tiempo laboral de: ".$Laboral1." a&ntilde;os <br> Tipo de Jubilando: por Antiguedad Adulta <br>
				Con una Jubilacion de: $ ".$resultado1."<br>".$div2;
			 }	
			 else
			 {
				$Resul = $Forma.$div1."<h1>Usted ".$nombre." no se puede Jubilar</h1>".$div2;
			 }
		file_put_contents("resultado.php", "$Resul");
		$lectura = file_get_contents("resultado.php");
		
		echo "<script> window.open('resultado.php','Nueva ventana')</script> ";
		//echo "<script> window.open('resultado.php','Nueva ventana')</script> ";
	}
	
?>
	