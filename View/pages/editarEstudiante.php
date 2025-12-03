<?php
// Incluir la conexión y el modelo
include_once "../../Config/conection.php";
include_once "../../Model/estudiante.php";

// Obtener datos del estudiante
$estudiante = Estudiante::obtenerUno($_GET["id"]);

include_once "../Templates/header.php";
?>

<div class="row">
    <div class="col-12">
        <h1>Editar estudiante</h1>

        <form action="../../Controller/actualizarEstudiante.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $estudiante->id ?>">

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $estudiante->nombre ?>" 
                       type="text" name="nombre" id="nombre" 
                       class="form-control" required>
            </div>

            <div class="form-group">
                <label for="grupo">Grupo</label>
                <input value="<?php echo $estudiante->grupo ?>" 
                       type="text" name="grupo" id="grupo" 
                       class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-success" type="submit">Guardar cambios</button>
            </div>

        </form>

    </div>
</div>

<?php include_once "../Templates/footer.php"; ?>
