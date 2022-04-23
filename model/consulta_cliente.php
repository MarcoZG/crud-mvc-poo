<?php
include_once ("conexion.php");
class Visualizar extends conexion{
    public function mostrar($sql){
        $this->conectar();
        $result = mysqli_query($this->con,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
}
?>