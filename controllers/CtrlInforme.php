<?php session_start();
require_once './core/Controlador.php';
require_once './models/Informe.php';

class CtrlInforme extends Controlador{
    private $_modelo;

    public function __construct(){
        $this->_modelo = new Informe;
    }

    public function respuestasInforme(){
        $data = [
           'evaluaciones'=> $this->_modelo->getAllData('evaluacion','descripcion desc'),
           'areas'=> $this->_modelo->getAllData('area','descripcionarea'),
           'ugeles'=> $this->_modelo->getAllData('ugel','ugeldescripcion'),
        ];
        
        echo $this->show('informes/respuestasInforme.php',$data,true);

    }
    public function ieInforme(){
        echo $this->show('informes/informesIIEE.php',false,true);
    }
    public function distritosInforme(){
        echo $this->show('informes/distritosUGEL.php',false,true);
    }
}