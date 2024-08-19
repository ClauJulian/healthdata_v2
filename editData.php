<?php
// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";

include("conexion.php");

$conexion = conexion();

$id = $_GET["id"];
$name = $_GET["name"];
$description = $_GET["description"];
$info_1 = $_GET["info_1"];
$info_2 = $_GET["info_2"];
$info_3 = $_GET["info_3"];
$info_4 = $_GET["info_4"];
$info_5 = $_GET["info_5"];


$sql = "UPDATE enfermedades SET name='$name', description ='$description', info_1 ='$info_1', info_2 = '$info_2', info_3 = '$info_3', info_4 = '$info_4', info_5 = '$info_5' WHERE id=$id";

$query = mysqli_query($conexion, $sql);



if($query) {
    Header("Location: index.php");
}