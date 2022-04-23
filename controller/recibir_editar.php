<?php
$vaariable = $_POST["1"];
if (empty($vaariable)){
    echo "error";
} else {
    $correo = $_POST["1"];
    $nombre = $_POST["2"];
    $edad = $_POST["3"];
    include_once "editar.php";
    $cliente = new Editar();
    $cliente->correo = "$correo";
    $cliente->nombre = "$nombre";
    $cliente->edad = "$edad";
    $cliente->editar();
    header("index.php");
}