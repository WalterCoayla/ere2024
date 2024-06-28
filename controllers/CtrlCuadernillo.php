<?php session_start();
require_once './core/Controlador.php';
require_once './models/Cuadernillo.php';

class CtrlCuadernillo extends Controlador{
    private $_modelo;

    public function __construct(){
        $this->_modelo = new Cuadernillo;
    }

    public function crearCuadernillo(){
        echo "Crear Cuadernillo";
    }
    public function consultaCuadernillo(){
        echo "Consultar Cuadernillo";
    }
}