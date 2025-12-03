<?php
include_once "../../Config/conection.php";
include_once "../../Model/estudiante.php";
include_once "../Templates/header.php";

$estudiantes = Estudiante::obtener();
?>

<div class="row">
    <div class="col-12">
        <h1>Listado de estudiantes</h1>
        <a href="form_register_estudiants.php" class="btn btn-info my-2">Nuevo</a>
    </div>

    <div class="col-12 table-responsive">
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Notas</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($estudiantes as $estudiante) { ?>
                    <tr>
                        <td><?php echo $estudiante["nombre"]; ?></td>
                        <td><?php echo $estudiante["grupo"]; ?></td>

                        <td>
                            <a href="notas_estudiante.php?id=<?php echo $estudiante['id']; ?>" class="btn btn-info">
                                Notas
                            </a>
                        </td>

                        <td>

                            <a href="editarEstudiante.php?id=<?php echo $estudiante['id']; ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>

                        <td>
                            <a href="../../Controller/eliminar_estudiante.php?id=<?php echo $estudiante['id']; ?>"
                                class="btn btn-danger"
                                onclick="return confirm('¿Seguro que deseas eliminar este estudiante?');">
                                Eliminar
                            </a>


                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once "../Templates/footer.php"; ?>