<?php
require_once __DIR__ . "/../clases/Arbol.php";

$resultado = "";

if ($_POST) {

    $pre = array_map('trim', explode(",", $_POST["preorden"]));
    $in = array_map('trim', explode(",", $_POST["inorden"]));

    $obj = new Arbol();

    $arbol = $obj->construirDesdePreIn($pre, $in);

    $resultado = $obj->mostrar($arbol);
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Punto 6</title>
</head>
<body>

<h2>arbol binario</h2>

<form method="POST">
    <input type="text" name="preorden" placeholder="preorden: A,B,D,E,C" required>
    <br><br>
    <input type="text" name="inorden" placeholder="inorden: D,B,E,A,C" required>
    <br><br>
    <button type="submit">construir</button>
</form>

<?php if ($resultado != "") { ?>
    <h3>Árbol:</h3>
    <?php echo $resultado; ?>
<?php } ?>

<br>
<a href="../index.php">⬅ Volver</a>

</body>
</html>