<?php
require_once "BaseDeDatos.php";
class EntidadBase
{
    private $_tabla;
    protected $_bd;

    private $_sql='';
    private $_parametros=[];

    
    public function __construct($tabla) {
        $this->_tabla=(string) $tabla;
        $this->_bd = new BaseDeDatos(new MySQL()); 
        /* $this->_sql = new SQL($this->_tabla); */
    }

    public function exeQuery($sql,$parametros){
        return $this->_bd->exeQuery($sql,$parametros);
    }

/*     public function setTabla($tabla){
        $this->_tabla = (string) $tabla;
    }
    public function setSql($sql){
        $this->_sql->setSQL($sql);
    }
    public function ejecutarSql(){
        return $this->_bd->ejecutar($this->_sql);
    } */
    

    public function getAll(){
        $sql = "SELECT * from ". $this->_tabla;
        $parametros = [];
        return $this->_bd->exeQuery($sql,$parametros);
    }
        
    public function getById($id){
        $sql = "SELECT * from ". $this->_tabla ."`id`=?";
        $parametros = ["$id"];
        return $this->_bd->exeQuery($sql,$parametros);
    }
   
    public function getBy($columna,$valor){
        $sql = "SELECT * from ". $this->_tabla ."`$columna`=?";
        $parametros = ["$valor"];
        return $this->_bd->exeQuery($sql,$parametros);
    }
    public function deleteById($id){
        $sql = "DELETE from ". $this->_tabla ."`ID`=?";
        $parametros = ["$id"];
        return $this->_bd->exeQuery($sql,$parametros);
    }
   
 
    /*
     * Aquí podemos montarnos un montón de métodos que nos ayuden
     * a hacer operaciones con la base de datos de la entidad
     */
     
}
?>
