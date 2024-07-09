<?php session_start();
require_once './core/Controlador.php';
require_once './models/Cuadernillo.php';

class CtrlCuadernillo extends Controlador{
    private $_modelo;

    public function __construct(){
        $this->_modelo = new Cuadernillo;
    }

    public function crearCuadernillo(){
        /* $datos = $this->_modelo->getDataEvaluacionArea(); */
        $data = [
           'evaluaciones'=> $this->_modelo->getAllData('evaluacion'),
           'areas'=> $this->_modelo->getAllData('area')
        ];

        echo $this->show('cuadernillo/crearCuadernillo.php',$data,true);
    }
    public function consultaCuadernillo(){
        $data = [
           'evaluaciones'=> $this->_modelo->getAllData('evaluacion')
        ];

        echo $this->show('cuadernillo/listarCuadernillo.php',$data,true);
    }
}