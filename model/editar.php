<?php
include_once ("conexion.php");
class Editar extends conexion{
    public $correo;
    public $nombre;
    public $edad;
    public function editar(){
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE clientes SET correo = ?, nombre = ?, edad = ? WHERE id = 2;");
        $pre->bind_param("ssi",$this->correo, $this->nombre, $this->edad);
        $pre->execute();
    }
}
?>