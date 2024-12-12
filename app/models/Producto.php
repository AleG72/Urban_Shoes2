<?php
class Producto {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function obtenerTodos() {
        $stmt = $this->pdo->prepare("SELECT * FROM productos");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM productos WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function agregar($nombre, $precio, $marca_id, $distribuidora_id, $imagen) {
        $stmt = $this->pdo->prepare("INSERT INTO productos (nombre, precio, marca_id, distribuidora_id, imagen) VALUES (:nombre, :precio, :marca_id, :distribuidora_id, :imagen)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':marca_id', $marca_id);
        $stmt->bindParam(':distribuidora_id', $distribuidora_id);
        $stmt->bindParam(':imagen', $imagen);
        $stmt->execute();
    }
    public function actualizar($id, $nombre, $precio, $marca_id, $distribuidora_id, $imagen) {
        $stmt = $this->pdo->prepare("UPDATE productos SET nombre = :nombre, precio = :precio, marca_id = :marca_id, distribuidora_id = :distribuidora_id, imagen = :imagen WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':marca_id', $marca_id);
        $stmt->bindParam(':distribuidora_id', $distribuidora_id);
        $stmt->bindParam(':imagen', $imagen);
        $stmt->execute();
    }

    public function eliminar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM productos WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
