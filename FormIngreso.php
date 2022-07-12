<!doctype html>
<html>
<head>
<title>Formulario y PHP</title>
<meta charset="UTF-8" />
<link rel="shortcun icon" href="icons8-calculator-100.png" />
<link rel="stylesheet" href="style.css">
</head> 
<body style="margin: 50px;
background-color: #a0ebdf">
<h1>Sumar dos números con formularios </h1>
<form action="formularioDestino.php" method="post">
<p> Número <input class="controls" type="text" name="valor1"></p>
<p> Número <input class="controls" type="text" name="valor2"></p>
<input class="botons" type="submit" value="sumar" />
<input class="botons" type="reset" value="limpiar" />
</form>
</body>
</html>
