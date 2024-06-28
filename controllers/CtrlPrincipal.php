<?php
session_start();
require_once './core/Controlador.php';

class CtrlPrincipal extends Controlador{
    public function index(){
            $datos = array(
                'contenido'=>$this->show('login/login.php',null,true)
            );
            $this->show('template.php',$datos); 
        
    }
    

}