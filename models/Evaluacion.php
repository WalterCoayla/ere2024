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
}