<?php session_start();?>
<?PHP if(($_SESSION["USUARIO"])==0)
{
?>
<script language='JavaScript'>
alert("Se Debe Loguear Para Ingresar Al Sistema");
//Mensaje de error
window.location = "../index.html"
//redireccionamos
</script>
<?php
exit;
}
include("../lib/version.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sistema de Ventas <?php echo $version ;?></title>

<link href="menu.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!--Mostramos el usuario que inicio sesion... -->
<div id="login">Bienvenido Usuario:<br>
<?php echo $_SESSION["USUARIO"];?></div>
<div class="menubg flt">
	<ul class="menu flt">
		<li class="current_page_item"><a  href="index_usr.php">Inicio</a></li>
	    <li  class=""><a href="#" title="Cotizar">Generar Cotizacion</a></li>
        <li class=""><a href="#" title="Venta">Generar Nota de Venta</a></li>
		<li class=""><a href="#" title="Consultar Stock">Consulta de Stock</a></li>
        <li class=""><a href="#" title="Pedido">Realizar Pedido</a></li>
        <li class=""><a href="logout.php" title="Salir del Sistema">Salir</a></li>
	</ul>	
</div>

</body>
</html>
