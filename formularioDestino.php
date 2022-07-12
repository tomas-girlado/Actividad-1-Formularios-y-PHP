<!doctype html>
    <html>
        <head>
            <title>Formulario y PHP</title>
            <meta charset="UTF-8" />
            <link rel="shortcun icon" href="icons8-calculator-100.png" />
            <body style="margin: 50px;
	background-color: #a0ebdf">
            <h1>Sumar dos números con formularios </h1>
            <h2>Datos  ingresados</h2>
            <form action="FormIngreso.php" method="POST">
            <?php
                $a = $_REQUEST ["valor1"];
                $b = $_REQUEST ["valor2"];
				$c = $_REQUEST ["valor3"];
                    echo $a;
                    echo "<br>";
                    echo $b;
                    echo "<br>";
                    $resultado =$a + $b;
                        echo "operacion: ".$a." + ".$b." + ".$c." = ".$resultado;
                        ?>
                            <br>
                            <br>
            <input type="submit" value="Atrás" />
        </form>
    </body>
</html>