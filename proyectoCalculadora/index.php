
<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora Aritm&eacute;metica</title>
	</head>
	<body>
		<h1>Calculadora</h1>
		<form action="resultado.php" method="post">
			<select name="operador">
				<option value="suma">+</option>
				<option value="resta">-</option>
				<option value="multiplicacion">x</option>
				<option value="division">/</option>
			</select><br />
			Ingresa tu primer n&uacute;mero:<br />
			<input type="text" name="valor1"><br />
			Ingresa tu segundo valor:<br />
			<input type="text" name="valor2"><br>
			<input type="reset" value="Borrar">
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>

