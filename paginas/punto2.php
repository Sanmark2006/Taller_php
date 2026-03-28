<?php
require_once __DIR__ . "/../clases/Matematicas.php";

$resultado = [];

if ($_POST) {
    $numero = $_POST["numero"];
    $opcion = $_POST["opcion"];

    $obj = new Matematicas();

    if ($opcion == "fibonacci") {
        $resultado = $obj->fibonacci($numero);
    } else if ($opcion == "factorial") {
        $resultado = $obj->factorial($numero);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Punto 2</title>
</head>
<body>

<h2>Fibonacci / Factorial</h2>

<form method="POST">
    <input type="number" name="numero" placeholder="Ingresa un número" required>

    <select name="opcion">
        <option value="fibonacci">Fibonacci</option>
        <option value="factorial">Factorial</option>
    </select>

    <button type="submit">Calcular</button>
</form>

<?php if (!empty($resultado)) { ?>
    <h3>Resultado:</h3>
    <?php
    foreach ($resultado as $num) {
        echo $num . " ";
    }
    ?>
<?php } ?>

<br>
<a href="../index.php">⬅ Volver</a>

</body>
</html>