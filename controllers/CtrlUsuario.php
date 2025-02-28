<?php session_start();
require_once './core/Controlador.php';
require_once './models/Usuario.php';

class CtrlUsuario extends Controlador{
    private $_usuario;

    public function index(){

        // echo "Saludos desde " .__CLASS__;
        $home = $this->show('usuario.php',null,true);
        $datos = array(
            'page'=>'Usuario',
            'contenido'=>$home
        );

        $this->show('template.php',$datos); 
       
    }

    public function validar() {

        if (! $this->preValidar())
            $this->cerrarSesion();
        
        $this->_usuario = new Usuario;
        
        $this->_usuario->validar($_POST['usuario'],$_POST['clave']);
        
        if (! isset($_SESSION)){
            header("Location: index.php"); die();
        }
        if ($_SESSION["dni"] == '') {
            $this->cerrarSesion();
        }
        //TODO
        $this->showDashBoard($_SESSION['idTipo']);
        
    }
    private function showDashBoard($idTipo){
        // Si es 1: Administrador, 3:Dremo, 4: Ugel
       $secciones = $this->_usuario->getGrados()['data'];

        $niveles = Helper::separa2Array($secciones, 'Primaria');
        $dataPrincipal = [
            'primaria'=> $niveles[0],
            'secundaria'=> $niveles[1],
        ];
        /* var_dump($dataPrincipal);exit; */
        $home = $this->show('administrador/principal.php',$dataPrincipal,true);

        if (in_array($idTipo,[1,3,4])){

            $menu = $this->show('template/nav.php',null,true);
            $datos = array(
                'menu'=> $menu,
                'contenido'=>$home
            );
            echo json_encode($datos);
            /* $this->show('template.php',$datos);  */
        } else {
            echo "Tipo:  ". $_SESSION['idTipo'];
        }
    }

    private function preValidar():bool {
        $u = isset($_POST['usuario'])?$_POST['usuario']:'';
        $p = isset($_POST['clave'])?$_POST['clave']:'';
        
        return (($p == '') || ($u == ''))?false:true;
    }
    public function cerrarSesion(){
        session_destroy();
        header("Location: index.php"); die();
    }
    public function registroUsuario(){
        echo $this->show('usuario/frmNuevo.php',null,true);
    }
    public function informacionUsuario(){
        echo $this->show('usuario/informacionUsuarios.php',null,true);
    }
    public function vistaUsuarios(){
        echo $this->show('usuario/accesoUsuarios.php',null,true);
    }

}