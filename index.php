<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo</title>
</head>
<body>
   <form action="controller/recibir_insertar.php" method="POST">
    <input type="email" name="1" id="">
    <input type="text" name="2" id="">
    <input type="text" name="3" id="">
    <input type="submit" value="enviar">
</form> 
<body>
   <form action="controller/recibir_editar.php" method="POST">
    <input type="email" name="1" id="">
    <input type="text" name="2" id="">
    <input type="text" name="3" id="">
    <input type="submit" value="enviar">
</form> 
<body>
</body>
</html>
<?php
include("controller/visualizar_cliente.php");
?>