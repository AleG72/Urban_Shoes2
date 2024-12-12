<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/ProductosController.php';
require_once __DIR__ . '/../app/controllers/MarcasController.php';


$request = $_SERVER['REQUEST_URI'];
$basePath = '/UrbanShoes/public';
$request = str_replace($basePath, '', $request);
$request = rtrim($request, '/');


if ($request == '/marcas') {
    $marcasController = new MarcasController($pdo);
    $marcasController->index();
}  elseif ($request == '' || $request == '/productos') {
    $productosController = new ProductosController($pdo);
    $productosController->index();
} else {
    echo "Página no encontrada :(";
}
