<?php
include_once __DIR__ . "/../Config/conection.php";

class Estudiante
{
    public $nombre, $grupo, $id;

    public function __construct($nombre, $grupo, $id = null)
    {
        $this->nombre = $nombre;
        $this->grupo = $grupo;
        $this->id = $id;
    }

    public function guardar()
    {
        global $mysqli;

        $sentencia = $mysqli->prepare("INSERT INTO estudiantes (nombre, grupo) VALUES (?, ?)");
        $sentencia->bind_param("ss", $this->nombre, $this->grupo);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;

        $resultado = $mysqli->query("SELECT id, nombre, grupo FROM estudiantes");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    // ============================
    // OBTENER UN ESTUDIANTE POR ID
    // ============================
    public static function obtenerUno($id)
    {
        global $mysqli;

        $sentencia = $mysqli->prepare("SELECT id, nombre, grupo FROM estudiantes WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();

        $resultado = $sentencia->get_result();
        $obj = $resultado->fetch_object();

        return $obj; // devuelve objeto: ->id, ->nombre, ->grupo
    }

    // ============================
    // ACTUALIZAR ESTUDIANTE
    // ============================
    public function actualizar()
    {
        global $mysqli;

        $sentencia = $mysqli->prepare("UPDATE estudiantes SET nombre = ?, grupo = ? WHERE id = ?");
        $sentencia->bind_param("ssi", $this->nombre, $this->grupo, $this->id);
        $sentencia->execute();
    }

    //eliminar=============
    //=====================
    public static function eliminar($id)
{
    global $mysqli;

    $sentencia = $mysqli->prepare("DELETE FROM estudiantes WHERE id = ?");
    $sentencia->bind_param("i", $id);
    $sentencia->execute();
}
}
