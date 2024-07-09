<?php
require_once './core/Modelo.php';

class Comparar extends Modelo {
    
    private $_tabla='Logro';
    /* private $_vista='v_constanciaEco'; */

    public function __construct($id=null){
        $this->id = $id;

        parent::__construct($this->_tabla);
    }

}