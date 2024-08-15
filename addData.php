<?php
// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";

include("conexion.php");

$conexion = conexion();

$name = $_GET["name"];
$description = $_GET["description"];
$recommendation = $_GET["recommendation"];


$sql = "INSERT INTO enfermedades VALUES (NULL, '$name','$description','$recommendation')";

$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: index.php");
}
?>