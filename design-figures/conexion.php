<?php 
class ApptivaDB{
    private $host = "localhost";
    private $port = "3306";
    private $usuario = "root";
    private $clave = "ivanadiana17";
    private $db "design";
    public $conexion;
    public function _construct(){
        $this->conexion = new mysql($this->host,$this->usuario, $this->clave,$this->db, $this->port)
        or die(mysql_error());
        $this->conexion->set_charset("utf8");
    }
    //Insertar
    public function insertar($tabla, $datos){
        $resultado = $this->conexion->query("INSERT INTO $tabla VALUES (null,$datos)") or die ($this->conexion->error);
        if($resultado)
            return true;
        return false;
    }
    //Borrar
    public function insertar($tabla, $condicion){
        $resultado = $this->conexion->query("DELETE FROM $tabla WHERE $condicion") or die ($this->conexion->error);
        if($resultado)
            return true;
        return false;
    }
    //Actualizar
    public function insertar($tabla, $campos,$condicion){
        $resultado = $this->conexion->query("UPDATE $tabla SET $campo WHERE $condicion") or die ($this->conexion->error);
        if($resultado)
            return true;
        return false;
    }
    //Buscar
    public function insertar($tabla, $condicion){
        $resultado = $this->conexion->query("SELECT * FROM $tabla WHERE $condicion") or die ($this->conexion->error);
        if($resultado)
            return $resultado->fetch_all(MYSQLI_ASSOC );
        return false;
    }
}


?>