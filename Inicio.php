<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/strict.dtd">
<html>
<head> <title>COCA KOLA </title>
<link href="css/parcial.css" TYPE="text/css" rel="stylesheet">
</head>
<script type="text/JavaScript">
	function MM_goToURL() 
	{
		var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
		for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
	}
    </script>
<body>
<div id="contenedor">
	<div id="encabezado">
<h1><img src="imagenes/kola.jpg" alt="UNIVERSIDAD GERARDO BARRIOS "width="120" height="80"/></h1>	
<p>SOMOS LA COMPA�IA LIDER EN EL MUNDO<br>UNETE A NOSOTROS Y DISFRUTA DE NUESTROS BENEFICIOS...</p>
</div>
<div id="menus">
	<ul>
<li id="navi01"><a href="Inicio.php">Inicio</a></li>
<li id="navi02"><a href="pagina/examen.php">Cotizaciones</a></li>
	</ul>
</div>
<div id="inicio" align="Center">
				<form name="Inicio" method="post" action="">
				<table border="6" cellspacing="16" align="Center">
					<tr><td>Usuario: <input type="text" name="txtUsuario"><br></td></tr>
					<tr><td>Contrase&#241a: <input type="password" name="txtcontrase�a"><br></td></tr>
					<tr><td align="Center"><input type="submit" onClick="MM_goToURL('parent','pagina/examen.php');return document.MM_returnValue" 
					value="Ingresar" name="enviar">
					<input type="reset" value="Limpiar"></td></tr>
				</table>
				</form>	
			</div>
			<div id="areatexto">
	<br><ul><br>
			<p align="Center">Inicie Sesion</p>
			
			<br>
		</ul>
			</div>
<div id="areatexto">
	<p>
Coca-Cola Espa�a (Compa��a de Servicios y Bebidas Refrescantes S.L.) es filial de la 
Compa��a desde hace m�s de medio siglo.
La sede se encuentra en Madrid y su funci�n principal es apoyar y asesorar 
a los siete embotelladores en materia de gesti�n de marcas y preparaci�n de
 planes de marketing, comunicaci�n y publicidad.
Los embotelladores, independientes y de capital 100% espa�ol, se encargan 
por su parte de fabricar, vender y distribuir los productos por todo el pa�s.
Gracias a este trabajo conjunto de Coca-Cola Espa�a y los embotelladores, 
se ha convertido en una de las filiales m�s importantes en el sistema 
internacional: es la sexta empresa del Grupo con mayor consumo per c�pita 
despu�s de M�xico, Chile, Estados Unidos, Australia y Argentina, y 
la primera en la Uni�n Europea. Adem�s, es la segunda filial del mundo, 
s�lo por detr�s de Jap�n, en variedad de bebidas, con 70 productos y 17 marcas diferentes.
As�, en 2006, la Divisi�n Ib�rica, compuesta por Espa�a y Portugal, 
y presidida por Marcos de Quinto, fue galardonada con la copa Woodruff, 
que reconoce a la unidad que mejor ha trabajado en materia econ�mica y cualitativa.
	</p>
	</div>
	<div id="pie">
	<p id="fin">Derechos reservados</p>
	</div>
</body>
</html>

<?php
	if(isset($_POST['enviar'])=="Guardar")
	{
		echo "<script> window.open('resultado.php','Nueva ventana')</script> ";
	}
?>
	