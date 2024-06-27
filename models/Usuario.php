<?php
require_once './core/Modelo.php';
require_once './assets/helper/Helper.php';

class Usuario extends Modelo {
    private $id;

    private $dni;
    private $login;
    private $clave;
    
    private $_tabla='usuarios';
    /* private $_vista='v_constanciaEco'; */

    public function __construct($dni=null){
        $this->dni = $dni;

        parent::__construct($this->_tabla);
    }
    /**
     * Validamos el LOGIN
     */
    public function validar(string $u, string $p) : void {
        
         // $sql = "Select * from $this->_tabla where login='$u'";
        $sql = "SELECT * FROM newdetalleusuario 
            JOIN newususario on newususario.dni=newdetalleusuario.dnidocente 
            JOIN tipo ON newdetalleusuario.tipo=tipo.idtipo 
            where newdetalleusuario.dnidocente= ? and newdetalleusuario.clave= ? ;";
        $parametros = ["$u","$p"];
        
        $respuesta = $this->_bd->ejecutar($sql,$parametros);
        
        $hash = $respuesta['data'][0]['clave'];
        //echo "$hash"; exit;
       /*  if ((! is_array($respuesta) ) || (! is_array($respuesta['data'])) || (! password_verify($p, $hash))) { */
        if ((! is_array($respuesta) ) || (! is_array($respuesta['data']))) {
            session_destroy(); 
            header("Location: index.php");
            exit();
        }

        $this->setSession($respuesta['data'][0]);   // Seteamos _SESSION
         
    }
    private function setSession($r) : void {
        $_SESSION['idSesion'] = '-miss45155-';
        $_SESSION['dni']  = $r['dni'];
        $_SESSION['nombres'] = $r['nombres'];
        $_SESSION['apellidoPaterno'] = $r['apellidopat'];
        $_SESSION['apellidoMaterno'] = $r['apellidomat'];
        $_SESSION['fullName'] = $_SESSION['nombres'] .' ' . $_SESSION['apellidoPaterno'] . ' ' . $_SESSION['apellidoMaterno'];
        $_SESSION['idTipo'] = $r['idtipo'];
        $_SESSION['descripcionTipo'] = $r['descripciontipo'];
        $_SESSION['idDetalles'] = $r['iddetalleus'];
        // Guardamos la Sesión
        $this->guardarSesion();  
    }
    
    private function guardarSesion(){
        $dni = $_SESSION['dni'];
        $hoy = Helper::getFechaHoraLocal();
        $ip = Helper::getIPCliente();
        $navegador = Helper::getBrowserCliente();
        $sistemaO = Helper::getSOCliente();
        $fecha = $hoy['hoyBD'];
        $hora = $hoy['hora'];
        
        $sql = "INSERT auditoria (dniusuario,ip,navegador,so,fecha,hora) 
            VALUES (?, ?, ?, ?, ?, ?);";
        $parametros = ["$dni","$ip", "$navegador", "$sistemaO", "$fecha", "$hora"];
        
        $respuesta = $this->_bd->ejecutar($sql,$parametros);    
    }


}