<?php
$mysqli = new mysqli('localhost', 'root', '', 'escuela_db');

if ($mysqli->connect_errno) {
    die("Fallo en la conexión: " . $mysqli->connect_error);
}
?>
