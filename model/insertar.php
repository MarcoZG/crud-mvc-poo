<?php
include_once ("conexion.php");
class Insertar extends conexion{
    public $correo;
    public $nombre;
    public $edad;
    public function create(){
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO clientes (correo,nombre,edad) VALUES (?,?,?)");
        $pre->bind_param("ssi", $this->correo, $this->nombre, $this->edad);
        $pre->execute();
    }
}
?>