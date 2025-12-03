<?php
include_once "../Config/conection.php";
include_once "../Model/estudiante.php";


if (!isset($_GET["id"])) {
    die("ID no especificado.");
}

$id = $_GET["id"];


Estudiante::eliminar($id);
header("Location: ../View/pages/mostrarEstudiante.php");
exit();
