<?php
$mysql = new mysqli('localhost', 'root', '', 'escuela_db');

if ($mysql->connect_errno) {
    echo "Fallo en la conexión: " . $mysql->connect_error;
} else {
    echo "Todo melo";
}
?>
