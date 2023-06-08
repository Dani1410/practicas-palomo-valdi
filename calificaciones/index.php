<!DOCTYPE html>
<html>

<head>
    <title>Calcular promedio de calificaciones</title>
</head>

<body>
    <h1>Calcular promedio de calificaciones</h1>
    <form method="post">
        <label>Ingrese la cantidad de calificaciones:</label>
        <input type="number" name="cantidad" required><br><br>
        <button type="submit" name="enviar">Generar</button>

        <?php
        if (isset($_POST['enviar'])) {
            if (isset($_POST['cantidad'])) {
                $cantidad = $_POST['cantidad'];

                for ($i = 1; $i <= $cantidad; $i++) {
                    echo "<label>Calificación " . $i . ":</label>";
                    echo "<input type='number' name='calificacion" . $i . "' required><br><br>";
                }

                echo "<input type='submit' name='calcular' value='Calcular promedio'>";
            }
        }
        ?>
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        if (isset($_POST['cantidad'])) {
            $cantidad = $_POST['cantidad'];
            $suma = 0;
            $aprobo_todas = true;

            for ($i = 1; $i <= $cantidad; $i++) {
                $input_name = 'calificacion' . $i;
                if (isset($_POST[$input_name])) {
                    $calificacion = $_POST[$input_name];
                    $suma += $calificacion;

                    echo "<br>Calificación " . $i . ": " . $calificacion;

                    if ($calificacion < 6) {
                        $aprobo_todas = false;
                        echo " - No aprobó";
                    } else {
                        echo " - Aprobó";
                    }
                }
            }

            if ($cantidad > 0) {
                $promedio = $suma / $cantidad;
                echo "<br><br>El promedio de calificaciones es: " . $promedio;

                if ($aprobo_todas) {
                    echo "<br>Aprobó todas las calificaciones";
                } else {
                    echo "<br>No aprobó todas las calificaciones";
                }
            } else {
                echo "<br><br>No se ingresaron calificaciones válidas.";
            }
        }
    }
    ?>
</body>

</html>