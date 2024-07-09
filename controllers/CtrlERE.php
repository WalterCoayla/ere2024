<?php session_start();
require_once './core/Controlador.php';
require_once './models/Ere.php';

class CtrlERE extends Controlador{
    private $_modelo;

    public function __construct(){
        $this->_modelo = new Ere;
    }

    public function getDataSelect(){
        $data = null;
        switch ($_POST['tipo']) {
            case 'ugel':
                $data = $this->_modelo->getUGEL4Select();
                break;
            case 'ies':
                $data = $this->_modelo->getIes4Select();
                break;
            case 'grados':
                $data = $this->_modelo->getGrados4Select();
                break;
            case 'areas':
                $data = $this->_modelo->getAreas4Select();
                break;
            
            default:
                $data = $this->_modelo->getAreas4Select();
                break;
        }
        echo $this->show('ere/optionSelect.php',$data,true);
    }
    public function getUGEL(){
        $data = $this->_modelo->getUGEL4Select();
        echo $this->show('ere/optionSelect.php',$data,true);
    }

    public function getDistritosXUgel(){
        $ugel = $_POST['dato'];
        /* echo 'Hola: '. $ugel; exit; */
        $data = $this->_modelo->getDistritos4UgelSelect($ugel);
        /* var_dump($data);exit; */
        echo $this->show('ere/optionSelect.php',$data,true);
    }

    public function getIesXDistrito(){
        $distrito = $_POST['dato'];
        $data = $this->_modelo->getIes4DistritoSelect($distrito);
        echo $this->show('ere/optionSelect.php',$data,true);
    }
    
    
}