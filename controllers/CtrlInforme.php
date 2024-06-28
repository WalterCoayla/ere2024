<?php session_start();
require_once './core/Controlador.php';
require_once './models/Informe.php';

class CtrlInforme extends Controlador{
    private $_modelo;

    public function __construct(){
        $this->_modelo = new Informe;
    }

    public function respuestasInforme(){
        echo "respuestasInforme Informe";
    }
    public function ieInforme(){
        echo "ieInforme Informe";
    }
    public function distritosInforme(){
        echo "distritosInforme Informe";
    }
}