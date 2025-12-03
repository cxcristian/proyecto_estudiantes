<?php

include_once __DIR__ . "/../Config/conection.php";
include_once __DIR__ . "/../Model/estudiante.php";

$estudiante = new Estudiante($_POST["nombre"], $_POST["grupo"]);

$estudiante->guardar();

header("Location: ../View/pages/mostrarEstudiante.php");
exit();
