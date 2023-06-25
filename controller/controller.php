<?php
require '../model/model.php';

class Controller {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function getCursos() {
        return $this->model->getCursos();
    }

    public function guardar($nombre, $descripcion, $creditos) {
        $this->model->guardarCurso($nombre, $descripcion, $creditos);
    }

    public function getCurso($id) {
        return $this->model->getCurso($id);
    }

    public function actualizar($id, $nombre, $descripcion, $creditos) {
        $this->model->actualizarCurso($id, $nombre, $descripcion, $creditos);
    }

    public function eliminar($id) {
        $this->model->eliminarCurso($id);
    }
}
