<?php session_start();
require_once './core/Controlador.php';
require_once './models/Logro.php';

class CtrlLogro extends Controlador{
    private $_modelo;

    public function __construct(){
        $this->_modelo = new Logro;
    }

    public function crearLogro(){
        echo "Crear Logro";
    }
    public function verLogro(){
        echo "Ver Logro";
    }
    public function listadoLogro(){
        echo "Listado Logro";
    }
}