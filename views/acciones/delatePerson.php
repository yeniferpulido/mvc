<?php
include '../../models/drivers/conexDB.php';
include '../../models/entities/entity.php';
include '../../models/entities/person.php';
include '../../controllers/personsControllers.php';

use app\controllers\personsControllers;
$controller = new personsControllers();
$result = $controller->delatePerson($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado de la Operacion</h1>
    <?php
    if($result){
        echo '<p>Datos eliminados</p>';
    } else {
        echo '<p>No se pudo eliminar los datos</p>';
    }
    ?>
    <a href="../persons.php">Volver</a>
</body>
</html>