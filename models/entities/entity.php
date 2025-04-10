<?php 

namespace app\models\entities;

abstract class Entity {

abstract function all();
abstract function save();
abstract function update();
abstract function delate();

    public function set($prop, $value)
    {
        $this->{$prop} = $value;
    }
    public function get($prop)
    {
        return $this->{$prop};
    }
}