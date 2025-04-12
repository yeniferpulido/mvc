<?php
include '../../models/drivers/conexDB.php';
include '../../models/entities/entity.php';
include '../../models/entities/person.php';
include '../../controllers/personsControllers.php';

use app\controllers\personsControllers;
$controller = new personsControllers();
$result = empty ($_POST['idInput'])
?$controller->saveNewPerson($_POST)
:$controller->updatePerson($_POST);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la aplicacion</title>

   
</head>
<body>
    <h1>Resultado de la operaccion</h1>
    <?php
    if($result){
        echo '<p>Datos guardados</p>';
    } else {
        echo '<p>No se pudo guardar los datos</p>';
    }
    ?>
    <a href="../persons.php">Volver</a>
</body>
</html>