<?php
include_once "../Config/conection.php";
include_once "../Model/estudiante.php";

// Verificar que los datos llegaron
if (!isset($_POST["id"], $_POST["nombre"], $_POST["grupo"])) {
    die("Datos incompletos.");
}

$id     = $_POST["id"];
$nombre = $_POST["nombre"];
$grupo  = $_POST["grupo"];

// Crear un objeto estudiante con los datos nuevos
$estudiante = new Estudiante($nombre, $grupo, $id);

// Ejecutar actualización en BD
$estudiante->actualizar();

// Redirigir de vuelta al listado
header("Location: ../View/pages/mostrarEstudiante.php");
exit();
