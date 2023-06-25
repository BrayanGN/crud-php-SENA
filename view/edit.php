<?php
require '../controller/controller.php';

$controller = new Controller();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $creditos = $_POST['creditos'];

    $controller->actualizar($id, $nombre, $descripcion, $creditos);
    header('Location: view.php');
    exit;
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $curso = $controller->getCurso($id);

    if (!$curso) {
        die('Curso no encontrado');
    }
} else {
    die('ID de curso no especificado');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Curso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./estilos/view.css">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between">
            <h1 class="font-weight-bold h1">Editar Curso</h1>
            <a href="./view.php" class="font-weight text-muted h1">X</a>
        </div>
        
        <br>
        <br>
        <form method="POST" action="">
            <input type="hidden"  name="id" value="<?php echo $curso['id']; ?>">

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="mi form-control" name="nombre" id="nombre" value="<?php echo $curso['nombre']; ?>" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="mi form-control" name="descripcion" id="descripcion" required><?php echo $curso['descripcion']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="creditos">Créditos:</label>
                <input type="number" class="mi form-control" name="creditos" id="creditos" value="<?php echo $curso['creditos']; ?>" required>
            </div>
            <br>
            <button type="submit" class="mi btn btn-primary">Actualizar</button>
        </form>
        <br>
        
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>