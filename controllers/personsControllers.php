<?php

namespace app\controllers;

use app\models\entities\Person;

class personsControllers{
    public function queryAllPersons(){ //consultar todos los datos de personas
        $person = new Person();
        $data = $person->all();
        return $data;
    }

    public function saveNewPerson($request){
        $person = new Person();
        $person ->set('name', $request['nombreInput']);
        $person ->set('email', $request['emailInput']);
        $person ->set('age', $request['edadInput']);
        return $person->save();
    }

    public function updatePerson($request){
        $person = new Person();
        $person ->set('id', $request['idInput']);
        $person ->set('name', $request['nombreInput']);
        $person ->set('email', $request['emailInput']);
        $person ->set('age', $request['edadInput']);
        return $person->update();

    }

    public function delatePerson($id){
        $person = new Person();
        $person->set('id', $id);
        return $person->delate();
    }
}