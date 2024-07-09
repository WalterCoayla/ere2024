<?php session_start();
require_once './core/Controlador.php';
require_once './models/Matriz.php';

class CtrlMatriz extends Controlador{
    private $_modelo;

    public function __construct(){
        $this->_modelo = new Matriz;
    }

    public function crearMatriz(){
        $data = [
           'evaluaciones'=> $this->_modelo->getAllData('evaluacion'),
           'areas'=> $this->_modelo->getAllData('area')
        ];
        echo $this->show('matriz/crearMatriz.php',$data,true);
    } 
    
    public function verMatriz(){
        $data = [
           'evaluaciones'=> $this->_modelo->getAllData('evaluacion'),
           'areas'=> $this->_modelo->getAllData('area')
        ];
        echo $this->show('matriz/verMatriz.php',$data,true);
    }
    public function ListadoMatriz(){
        $data = [
           'evaluaciones'=> $this->_modelo->getAllData('evaluacion')
        ];
        echo $this->show('matriz/listadoMatriz.php',$data,true);
    }
}