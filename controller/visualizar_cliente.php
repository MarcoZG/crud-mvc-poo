<table class="table">
    <thead>
        <tr>
            <th>correo</th>
            <th>nombre</th>
            <th>edad</th>
        </tr>
    </thead>
<?php
require_once ("conexion.php");
require_once ("consulta_cliente.php");
$obj = new Visualizar();
$sql = "SELECT id,correo,nombre,edad FROM clientes";
$datos = $obj->mostrar($sql);
foreach ($datos as $key) {

?>
    <tbody>
        <tr>
            <td><?php echo $key["correo"]?></td>
            <td><?php echo $key["nombre"]?></td>
            <td><?php echo $key["edad"]?></td>
        </tr>
    </tbody>
<?php
}
?>    
</table>