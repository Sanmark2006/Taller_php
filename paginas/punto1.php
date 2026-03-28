<?php
require_once __DIR__ . "/../clases/Acronimo.php";

$resultado = "";

if ($_POST) {
    $frase = $_POST["frase"];

    $obj = new Acronimo();
    $resultado = $obj->generar($frase);
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Punto 1 - Acrónimo</title>
</head>
<body>

<h2>Generador de Acrónimos</h2>

<form method="POST">
    <input type="text" name="frase" placeholder="Escribe una frase" required>
    <button type="submit">Generar</button>
</form>

<?php if ($resultado != "") { ?>
    <h3>Resultado: <?php echo $resultado; ?></h3>
<?php } ?>

<br>
<a href="../index.php">⬅ Volver al menú</a>

</body>
</html>