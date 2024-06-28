<?php session_start();
require_once './core/Controlador.php';
require_once './models/Matriz.php';

class CtrlMatriz extends Controlador{
    private $_modelo;

    public function __construct(){
        $this->_modelo = new Matriz;
    }

    public function crearMatriz(){
        echo "Crear Matriz";
    }
    public function verMatriz(){
        echo "Ver matriz";
    }
    public function ListadoMatriz(){
        echo "Listado matriz";
    }
}