<!DOCTYPE html>
<html>

<head>
    <title>Verificar números divisibles entre 3</title>
</head>

<body>
    <h1>Verificar números divisibles entre 3</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="cantidad">Ingrese la cantidad de números:</label>
        <input type="number" id="cantidad" name="cantidad" min="1" required>

        <?php
        if (isset($_POST['cantidad'])) {
            $cantidad = $_POST['cantidad'];

            for ($i = 1; $i <= $cantidad; $i++) {
                echo "<label for='numero$i'>Número $i:</label>";
                echo "<input type='number' id='numero$i' name='numeros[]' required>";
            }
        }
        ?>

        <input type="submit" value="Verificar">
    </form>

    <?php
    // Comprobamos si se ha enviado el formulario
    if (isset($_POST['numeros']) && is_array($_POST['numeros'])) {
        // Obtenemos la lista de números ingresada
        $numeros = $_POST['numeros'];

        // Variable para almacenar los números divisibles entre 3
        $divisibles = array();

        // Verificamos si hay números ingresados
        if (!empty($numeros)) {
            // Recorremos el array y verificamos si los números son divisibles entre 3
            foreach ($numeros as $numero) {
                if ($numero % 3 == 0) {
                    $divisibles[] = $numero;
                    echo "<p>$numero es divisible por 3.</p>";
                } else {
                    echo "<p>$numero no es divisible por 3.</p>";
                }
            }

            // Mostramos los números divisibles entre 3
            if (!empty($divisibles)) {
                echo "<h2>Números divisibles entre 3:</h2>";
                echo "<ul>";
                foreach ($divisibles as $numero) {
                    echo "<li>$numero</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No se encontraron números divisibles entre 3.</p>";
            }
        } else {
            echo "<p>No se ingresaron números.</p>";
        }
    }
    ?>
</body>

</html>