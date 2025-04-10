<?php

namespace app\controllers;

use app\models\entities\Person;

class personsControllers{
    public function queryAllPersons(){ //consultar todos los datos de personas
        $person = new Person();
        $data = $person->all();
        return $data;
    }
}