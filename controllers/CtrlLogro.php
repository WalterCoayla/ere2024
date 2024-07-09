<?php session_start();
require_once './core/Controlador.php';
require_once './models/Logro.php';

class CtrlLogro extends Controlador{
    private $_modelo;

    public function __construct(){
        $this->_modelo = new Logro;
    }

    public function crearIndicador(){
        
        $data = [
           'evaluaciones'=> $this->_modelo->getAllData('evaluacion'),
           'areas'=> $this->_modelo->getAllData('area')
        ];
        
        echo $this->show('logro/crearIndicador.php',$data,true);
    }
    public function verLogro(){
        echo "verLogro";
    }
    public function listadoLogro(){
        $data = [
           'evaluaciones'=> $this->_modelo->getAllData('evaluacion')
           
        ];
        
        echo $this->show('logro/listadoLogro.php',$data,true);
    }
}