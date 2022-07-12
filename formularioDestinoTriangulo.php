<!doctype html>
    <html>
        <head>
            <title>Formulario y PHP</title>
            <meta charset="UTF-8" />
            <link rel="shortcun icon" href="file:///E|/1008/Taller/Programacion/PHP/C3/Formularios/icons8-calculator-100.png" />
            <body style="margin: 50px;
	background-color: #a0ebdf">
            <h1>Sumar dos números con formularios </h1>
            <h2>Datos  ingresados</h2>
            <form action="file:///E|/1008/Taller/Programacion/PHP/C3/Formularios/FormIngreso.php" method="POST">
            <?php
                $a = $_REQUEST ["valor1"];
                $b = $_REQUEST ["valor2"];
                    echo $a;
                    echo "<br>";
                    echo $b;
                    echo "<br>";
				    $c =$a + $b;
				         echo "operacion: ".$a." + ".$b." = ".c;\|
                    $resultado =$c / 2 
                        echo "operacion: ".$c." / 2  = ".$resultado;
                        ?>
                            <br>
                            <br>
            <input type="submit" value="Atrás" />
        </form>
    </body>
</html>