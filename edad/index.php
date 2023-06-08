<!DOCTYPE html>
<html>

<head>
    <title>Calcular promedio de edades</title>
</head>

<body>
    <h1>Calcular promedio de edades</h1>
    <form method="post">
        <label>Ingrese la cantidad de edades a promediar:</label>
        <input type="number" name="cantidad" required><br><br>
        <button type="submit" name="enviar">Generar</button>

        <?php
        if (isset($_POST['enviar'])) {
            if (isset($_POST['cantidad'])) {
                $cantidad = $_POST['cantidad'];

                for ($i = 1; $i <= $cantidad; $i++) {
                    echo "<label>Edad " . $i . ":</label>";
                    echo "<input type='number' name='edad" . $i . "' required><br><br>";
                }

                echo "<button type='submit' name='obtener'>Obtener promedio</button>";
            }
        }
        ?>
    </form>

    <?php
    if (isset($_POST['obtener'])) {
        if (isset($_POST['cantidad'])) {
            $cantidad = $_POST['cantidad'];
            $suma = 0;

            for ($i = 1; $i <= $cantidad; $i++) {
                $input_name = 'edad' . $i;
                if (isset($_POST[$input_name])) {
                    $edad = $_POST[$input_name];
                    $suma += $edad;
                }
            }

            if ($cantidad > 0) {
                $promedio = $suma / $cantidad;
                echo "<br><br>El promedio de edad es: " . $promedio;
            } else {
                echo "<br><br>No se ingresaron edades válidas.";
            }
        }
    }
    ?>
</body>

</html>
