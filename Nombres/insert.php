<?php

 require 'conexion.php';
 $nombre  = $_POST['nombre'];
 $apellido  = $_POST['apellido'];
 $edad = $_POST['edad'];
 $sexo = $_POST['sexo'];
 $direccion = $_POST['direccion'];

$query = <<<SQL
INSERT INTO informacion(nombre,apellido,edad,sexo,direccion) VALUES (:nombre,:apellido,:edad,:sexo,:direccion)

SQL;

$statement = $db->prepare($query);

$params = [
    'nombre' => $nombre,
    'apellido' => $apellido,
    'edad' => $edad,
    'sexo' => $sexo,
    'direccion' => $direccion,
];

$statement->execute($params);

if($statement){
   echo "<script> alert('correcto');
    location.href = '../index.html';
   </script>";
   
}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.html';
    </script>";
}
?>

<?php
include("conexion.php");

$query = 'SELECT * FROM usuarios';
$statement = $db->prepare($query);
$statement->execute();
$rows = $statement->fetchAll();

?>

<link rel="stylesheet" href="s.css">

    <table>
    <thead class="tr-cab">
    <tr>
    <th>N°</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Sexo</th>
    <th>Direcion</th>
    <th id="th-b"><a href="index.html"><Button class="button">Nuevo registro</Button></a><br></th>
    </tr>
    </thead>
    <tbody>

    <?php
    foreach($rows as $row)
    
    {
        ?>
    <tr>
    <td ><?php echo $row['id'];?></td>
    <td ><?php echo $row['nombre']; ?></td>
    <td ><?php echo $row['apellido']; ?></td>
    <td ><?php echo $row['sexo']; ?></td>
    <td ><?php echo $row['direccion']; ?></td>
    <tr>
    <?php 
    
    }
    ?>                       
</table>