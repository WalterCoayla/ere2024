<?php
require_once './core/Modelo.php';
require_once './assets/helper/Helper.php';

class Informe extends Modelo {
    
    private $_tabla='Evaluacion';
    /* private $_vista='v_constanciaEco'; */

    public function __construct($id=null){
        $this->id = $id;

        parent::__construct($this->_tabla);
    }

}