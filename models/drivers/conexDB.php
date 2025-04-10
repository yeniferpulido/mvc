<?php

namespace  app\models\drivers;

use mysqli;

class conexDB{
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $nameDB = 'examen_pr2';

    private $conexDB = null;

    private $conex = null;

    public function __construct() // abrir conexion con la base dedatos
    {
        $this->conex = new mysqli(
        $this->host,
        $this->user,
        $this->pwd,
        $this->nameDB
    );

    }
    public function execSQL($sql){ //ejecutar la base de datos
        return $this->conex->query($sql);
    }

    public function close (){ //cerrar la conexion de la base de datos
        $this->conex->close();
    }
}

