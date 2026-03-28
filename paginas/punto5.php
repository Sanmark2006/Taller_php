<?php
require_once __DIR__ . "/../clases/Binario.php";

$resultado = "";

if ($_POST) {
    $numero = $_POST["numero"];

    $obj = new Binario();
    $resultado = $obj->convertir($numero);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Punto 5</title>
</head>
<body>

<h2>Convertir a Binario</h2>

<form method="POST">
    <input type="number" name="numero" placeholder="Ingresa un número" required>
    <button type="submit">Convertir</button>
</form>

<?php if ($resultado != "") { ?>
    <h3>Binario: <?php echo $resultado; ?></h3>
<?php } ?>

<br>
<a href="../index.php">⬅ Volver</a>

</body>
</html>
