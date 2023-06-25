<?php
class Model {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=curso', 'root', '');
    }

    public function getCursos() {
        $query = $this->db->query('SELECT * FROM Cursos');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardarCurso($nombre, $descripcion, $creditos) {
        $query = $this->db->prepare('INSERT INTO Cursos (nombre, descripcion, creditos) VALUES (?, ?, ?)');
        $query->execute([$nombre, $descripcion, $creditos]);
    }

    public function getCurso($id) {
        $query = $this->db->prepare('SELECT * FROM Cursos WHERE id = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizarCurso($id, $nombre, $descripcion, $creditos) {
        $query = $this->db->prepare('UPDATE Cursos SET nombre = ?, descripcion = ?, creditos = ? WHERE id = ?');
        $query->execute([$nombre, $descripcion, $creditos, $id]);
    }

    public function eliminarCurso($id) {
        $query = $this->db->prepare('DELETE FROM Cursos WHERE id = ?');
        $query->execute([$id]);
    }
}
