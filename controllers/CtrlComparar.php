<?php session_start();
require_once './core/Controlador.php';
require_once './models/Comparar.php';

class CtrlComparar extends Controlador{
    private $_modelo;

    public function __construct(){
        $this->_modelo = new Comparar;
    }

    public function compararXAnio(){
        $data = [
           
           'evaluaciones'=> $this->_modelo->getAllData('evaluacion','descripcion DESC'),
           'ugeles'=> $this->_modelo->getAllData('ugel'),
           'areas'=> $this->_modelo->getAllData('area'),
           
        ];
        
        echo $this->show('comparar/xAnio.php',$data,true);

    }
    public function compararXEvaluacion(){
        echo $this->show('comparar/xEvaluacion.php',false,true);
    }
    
}