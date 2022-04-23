<?php
$vaariable = $_POST["1"];
if (empty($vaariable)){
    echo "error";
} else {
    $correo = $_POST["1"];
    $nombre = $_POST["2"];
    $edad = $_POST["3"];
    include_once "insertar.php";
    $cliente = new Insertar();
    $cliente->correo = "$correo";
    $cliente->nombre = "$nombre";
    $cliente->edad = "$edad";
    $cliente->create();
    
}
header("index.php");