<?php
class MarcasController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }


    public function index() {
        $query = $this->pdo->prepare("SELECT DISTINCT nombre FROM marcas m JOIN productos p ON p.id_marca = m.id_marca");
        $query->execute();
        $marcas = $query->fetchAll(PDO::FETCH_ASSOC);

        require_once __DIR__ . '/../views/marcas/index.php';
    }
    
    public function filtrar($marca) {
        $query = $this->pdo->prepare("SELECT * FROM productos WHERE nombre_p = ?");
        $query->execute([$marca]);
        $productos = $query->fetchAll(PDO::FETCH_ASSOC);
    
        require_once __DIR__ . '/../../views/productos/filtrados.php';
    }
}
