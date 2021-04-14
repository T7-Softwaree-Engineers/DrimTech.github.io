<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Iniciar sesión</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head><!--Conexiones-->


<body style="background: var(--gray-dark);">
<!--Estilo del body-->

<h1 style="border-right-style: none;text-align: center;color: var(--light);">DrimTech</h1><!--Título-->

<form action="redireccionar_home_admin.php" method="post"><!--Aqui se deberá poner la página a la que va a redireccionar una vez que el administrador inicie sesión, que aún no se crea-->

	<table>
		<br>
		<br>
		<br>
		<br>
		<h2>Iniciar sesión</h2>
		<br>
		<tr>
		<td class="izq">Usuario: </td>	
		<td class="der"><input type="text" name="login"></td>
		</tr>

		<tr>
		<td class="izq">Contraseña: </td>	
		<td class="der"><input type="password" name="password"></td>
		</tr>

		<tr>
			<td colspan="2"><input type="submit" name="enviar" value="Entrar"></td>
		</tr>
	</table><!--Termina cuadro de texto para inicio de sesión-->

</body><!--Termina cuerpo del login-->
</html>