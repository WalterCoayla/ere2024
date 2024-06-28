<?php
require_once './core/Modelo.php';
require_once './assets/helper/Helper.php';

class Evaluacion extends Modelo {
    private $id;

    private $nombre;
    private $descripcion;
    
    private $_tabla='Evaluacion';
    /* private $_vista='v_constanciaEco'; */

    public function __construct($id=null){
        $this->id = $id;

        parent::__construct($this->_tabla);
    }
    private function guardar(){
        
        $sql = "INSERT auditoria (dniusuario,ip,navegador,so,fecha,hora) 
            VALUES (?, ?, ?, ?, ?, ?);";
        $parametros = ["$dni","$ip", "$navegador", "$sistemaO", "$fecha", "$hora"];
        
        $respuesta = $this->_bd->ejecutar($sql,$parametros);    
    }
    public function getEvaluaciones(){
        $sql = "SELECT * FROM evaluacion";
        $parametros = [];
        $evaluaciones = $this->_bd->ejecutar($sql,$parametros)['data'];
        for ($i=0; $i < count($evaluaciones); $i++) { 
            $sql = "Select count(id) as total from ". $evaluaciones[$i]['tabla'];
            $total = $this->_bd->ejecutar($sql,$parametros)['data'][0]['total'];
            $evaluaciones[$i]['total']=$total;
        }
        return $evaluaciones;
    }
    public function getEvaluacionesActivas(){
        $sql = "SELECT * FROM evaluacion where estado=?";
        $parametros = ['1'];
        return $this->_bd->ejecutar($sql,$parametros)['data'];
    }
}