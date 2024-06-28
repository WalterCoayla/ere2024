<?php session_start();
require_once './core/Controlador.php';
require_once './models/Evaluacion.php';

class CtrlEvaluacion extends Controlador{
    private $_modelo;

    public function __construct(){
        $this->_modelo = new Evaluacion;
    }
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
        $data = [
           'evaluaciones'=> $this->_modelo->getEvaluaciones()
        ];

        echo $this->show('evaluacion/vistaEvaluacion.php',$data,true);
    }
    public function guardarEvaluacion(){
        var_dump($_POST);
        echo "<br>Guardando Evaluacion";
    }
    public function importarEvaluacion(){
       $data = [
        'evaluaciones'=>$this->_modelo->getEvaluacionesActivas()
       ]; 
       
        echo $this->show('evaluacion/importarEvaluacion.php',$data,true);
    }
    public function totalEstudiantesEvaluacion(){
        echo "Total Estudiantes";
    }
    public function porcXAreasEvaluacion(){
        echo "Porcentaje x Areas";
    }
    public function consolidadoXAreasEvaluacion(){
        echo "Consolidado x Areas";
    }
    public function consolidadoEvaluacion(){
        echo "Consolidado Evaluaciones";
    }
    public function datosEvaluacion(){
        echo "Datos Evaluaciones";
    }

}