<?php
require_once __DIR__ . "/../clases/Conjuntos.php";

$resultado = [];

if ($_POST) {
    $entradaA = $_POST["A"];
    $entradaB = $_POST["B"];

    // convertir a arrays de enteros
    $A = array_map('intval', array_map('trim', explode(",", $entradaA)));
    $B = array_map('intval', array_map('trim', explode(",", $entradaB)));

    $obj = new Conjuntos();

    $resultado = [
        "union" => $obj->union($A, $B),
        "interseccion" => $obj->interseccion($A, $B),
        "AmenosB" => $obj->diferencia($A, $B),
        "BmenosA" => $obj->diferencia($B, $A)
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Punto 4</title>
</head>
<body>

<h2>Operaciones con Conjuntos</h2>

<form method="POST">
    <input type="text" name="A" placeholder="conjuntp a (ej: 1,2,3)" required> 
    <br><br>
    <input type="text" name="B" placeholder="Conjunto b (ej: 2,3,4)" required>
    <br><br>
    <button type="submit">Calcular</button>
</form>

<?php if (!empty($resultado)) { ?>
    <h3>Unión: <?php echo implode(", ", $resultado["union"]); ?></h3>
    <h3>Intersección: <?php echo implode(", ", $resultado["interseccion"]); ?></h3>
    <h3>A - B: <?php echo implode(", ", $resultado["AmenosB"]); ?></h3>
    <h3>B - A: <?php echo implode(", ", $resultado["BmenosA"]); ?></h3>
<?php } ?>

<br>
<a href="../index.php">⬅ Volver</a>

</body>
</html>
