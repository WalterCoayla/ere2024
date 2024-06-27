<?php session_start();
require_once './core/Controlador.php';
require_once './models/Evaluacion.php';

class CtrlEvaluacion extends Controlador{
    public function index(){

        // echo "Saludos desde " .__CLASS__;
        /* $home = $this->show('usuario.php',null,true);
        $datos = array(
            'page'=>'Usuario',
            'contenido'=>$home
        ); */

        $this->show('template.php',$datos); 
    }
    public function crearEvaluacion(){
        /* echo "Creando evaluación"; */
        echo $this->show('evaluacion/crearEvaluacion.php',null,true);
    }

    public function vistaEvaluacion(){
        echo "Vista evaluación";
    }
    public function guardarEvaluacion(){
        var_dump($_POST);
        echo "<br>Guardando Evaluacion";
    }

}