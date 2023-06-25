<?php
require '../controller/controller.php';

$controller = new Controller();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $creditos = $_POST['creditos'];

    $controller->guardar($nombre, $descripcion, $creditos);
    header('Location: view.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear Curso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between">
            <h1 class="font-weight-bold h1">Crear curso</h1>
            <a href="./view.php" class="font-weight text-muted h1">X</a>
        </div>
        <br>
        <br>
        <form method="POST" action="">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" name="descripcion" id="descripcion" required></textarea>
            </div>

            <div class="form-group">
                <label for="creditos">Créditos:</label>
                <input type="number" class="form-control" name="creditos" id="creditos" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>