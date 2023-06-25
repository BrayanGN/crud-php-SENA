<?php
require '../controller/controller.php';

$controller = new Controller();
$cursos = $controller->getCursos();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listado de Cursos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./estilos/view.css">
</head>
<body>
    <div class="container">
        <h1 class="font-weight-bold text-center ">Listado de Cursos</h1>
        <br>
        <br>
        <div class="mi table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Créditos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cursos as $curso): ?>
                        <tr>
                            <td><?php echo $curso['id']; ?></td>
                            <td><?php echo $curso['nombre']; ?></td>
                            <td><?php echo $curso['descripcion']; ?></td>
                            <td><?php echo $curso['creditos']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $curso['id']; ?>" class="mi btn btn-primary">Editar</a>
                                <br>
                                <br>
                                <a href="delete.php?id=<?php echo $curso['id']; ?>" class="mi btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <a href="create.php" class="mi btn btn-primary">Crear Curso</a>
    </div>

</body>
</html>
