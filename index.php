<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test _ Despliegue automático</title>
</head>
<body>
    Fecha: <?php echo date("Y-m-d H:i:s"); ?>
    <?php 
    require_once "vendor/autoload.php";

    $hello = new Rivsen\Demo\Hello();
    echo $hello->hello();

    ?>
</body>
</html>