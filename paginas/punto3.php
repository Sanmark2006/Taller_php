<?php
require_once __DIR__ . "/../clases/Estadistica.php";

$resultado = null;

if ($_POST) {
    $entrada = $_POST["numeros"];

    // convertir texto a array
    $numeros = array_map('floatval', explode(",", $entrada));

    $obj = new Estadistica();

    $resultado = [
        "promedio" => $obj->promedio($numeros),
        "media" => $obj->media($numeros),
        "moda" => $obj->moda($numeros)
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Punto 3</title>
</head>
<body>

<h2>Promedio, Media y Moda</h2>

<form method="POST">
    <input type="text" name="numeros" placeholder="Ej: 1,2,3,4,4,5" required>
    <button type="submit">Calcular</button>
</form>

<?php if ($resultado) { ?>
    <h3>Promedio: <?php echo $resultado["promedio"]; ?></h3>
    <h3>Media: <?php echo $resultado["media"]; ?></h3>
    <h3>Moda: 
        <?php 
        foreach ($resultado["moda"] as $m) {
            echo $m . " ";
        }
        ?>
    </h3>
<?php } ?>

<br>
<a href="../index.php">⬅ Volver</a>

</body>
</html>


