<?php include "../Templates/header.php" ?>

<div class="row">
    <div class="col-12">
        <h1>Registro Estudiantes</h1>

        <form action="../../Controller/guardarEstudiante.php" method="POST">

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="pepito lopez" required name="nombre">
            </div>

            <div class="mb-3">
                <label for="grupo" class="form-label">Grupo</label>
                <input type="text" class="form-control" id="grupo" placeholder="10-2" required name="grupo">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>

        </form>

    </div>
</div>

<?php include "../Templates/footer.php" ?>