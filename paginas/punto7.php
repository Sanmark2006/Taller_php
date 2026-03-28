<?php
session_start();
require_once __DIR__ . "/../clases/Calculadora.php";

if (!isset($_SESSION["historial"])) {
    $_SESSION["historial"] = [];
}

$resultado = "";

if ($_POST) {

    if (isset($_POST["borrar"])) {
        $_SESSION["historial"] = [];
    } else {

        $a = $_POST["a"];
        $b = $_POST["b"];
        $op = $_POST["op"];

        $obj = new Calculadora();
        $resultado = $obj->calcular($a, $b, $op);

        $registro = "$a $op $b = $resultado";
        $_SESSION["historial"][] = $registro;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Punto 7</title>
</head>
<body>

<h2>Calculadora</h2>

<form method="POST">
    <input type="number" step="any" name="a" placeholder="Número 1" required>
    <input type="number" step="any" name="b" placeholder="Número 2" required>

    <select name="op">
        <option value="suma">+</option>
        <option value="resta">-</option>
        <option value="multiplicacion">*</option>
        <option value="division">/</option>
        <option value="porcentaje">%</option>
    </select>

    <button type="submit">calcular</button>
</form>

<?php if ($resultado !== "") { ?>
    <h3>Resultado: <?php echo $resultado; ?></h3>
<?php } ?>

<h3>Historial:</h3>

<?php
foreach ($_SESSION["historial"] as $h) {
    echo $h . "<br>";
}
?>

<form method="POST">
    <button type="submit" name="borrar">Borrar historial</button>
</form>

<br>
<a href="../index.php">⬅ volver</a>

</body>
</html>