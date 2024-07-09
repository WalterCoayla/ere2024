<?php
require_once './core/Modelo.php';

class Ere extends Modelo {
    
    private $_tabla='ere';
    /* private $_vista='v_constanciaEco'; */

    public function __construct($id=null){
        $this->id = $id;

        parent::__construct($this->_tabla);
    }
    public function getUGEL4Select(){
        return [
            'data'=>$this->getAllData('ugeles')['data'],
            'clave'=>'ugel',
            'value'=>'ugeldescripcion'
        ];
    }
    public function getIes4Select(){
        return [
            'data'=>$this->getAllData('ies','descripcion')['data'],
            'clave'=>'codmodular',
            'value'=>'descripcion'
        ];
    }
    public function getDistritos4Select(){
        return [
            'data'=>$this->getAllData('distrito','distrito')['data'],
            'clave'=>'distrito',
            'value'=>'distrito'
        ];
    }
    public function getDistritos4UgelSelect($ugel){
        $sql = "Select * from distrito where ugel=? ORDER BY distrito";
        $parametros = [$ugel];
        /* $r = $this->_bd->ejecutar($sql,$parametros)['data'];
        var_dump($r);exit; */
        return [
            'data'=>$this->_bd->ejecutar($sql,$parametros)['data'],
            'clave'=>'distrito',
            'value'=>'distrito'
        ];
    }
    public function getIes4DistritoSelect($distrito){
        $sql = "Select * from ies where distrito=? ORDER BY descripcion";
        $parametros = [$distrito];
        
        return [
            'data'=>$this->_bd->ejecutar($sql,$parametros)['data'],
            'clave'=>'codmodular',
            'value'=>'descripcion'
        ];
    }
    public function getGrados4Select(){
        return [
            'data'=>$this->getAllData('grados')['data'],
            'clave'=>'grado',
            'value'=>'grado'
        ];
    }
    public function getAreas4Select(){
        return [
            'data'=>$this->getAllData('area','descripcionarea')['data'],
            'clave'=>'cod',
            'value'=>'descripcionarea'
        ];
    }
    public function getEvaluaciones4Select(){
        return [
            'data'=>$this->getAllData('evaluacion')['data'],
            'clave'=>'tabla',
            'value'=>'descripcion'
        ];
    }

}