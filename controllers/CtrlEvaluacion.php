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
        $data = [
           'evaluaciones'=> $this->_modelo->getEvaluaciones()
        ];

        echo $this->show('evaluacion/totalEstudiantes.php',$data,true);
    }
    public function porcXAreasEvaluacion(){
        $data = [
           'evaluaciones'=> $this->_modelo->getEvaluaciones()
        ];

        echo $this->show('evaluacion/porcentajeAreas.php',$data,true);
    }
    public function consolidadoXAreasEvaluacion(){
        $data = [
           'evaluaciones'=> $this->_modelo->getEvaluaciones()
        ];

        echo $this->show('evaluacion/consolidadoAreas.php',$data,true);
    }
    public function consolidadoEvaluacion(){
        $data = [
           'evaluaciones'=> $this->_modelo->getEvaluaciones()
        ];

        echo $this->show('evaluacion/consolidadoEvaluacion.php',$data,true);
    }
    public function datosEvaluacion(){
        $data = [
           'evaluaciones'=> $this->_modelo->getEvaluaciones()
        ];

        echo $this->show('evaluacion/asistenciaEvaluacion.php',$data,true);
    }

}