<?php
include '../models/drivers/conexDB.php';
include '../models/entities/entity.php';
include '../models/entities/person.php';
include '../controllers/personsControllers.php';

use app\controllers\personsControllers;
use app\models\entities\Person;

$controller = new personsControllers();
$persons = $controller->queryAllPersons();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personas</title>
</head>
<body>
    <h1>Personas</h1>
    <br>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Mayor de edad</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($persons as $person){
                echo '<tr>';
                echo ' <td>'.$person->get('name').'</td>';
                echo ' <td>'.$person->get('email').'</td>';
                echo ' <td>'.$person->get('age').'</td>';
                echo ' <td>'.$person->mayorEdad().'</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>