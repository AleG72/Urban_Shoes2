<?php

class ProductosController {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index()
{
    $stmt = $this->pdo->query("SELECT id_producto, nombre_p, precio, id_marca FROM productos");
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $imagenes = [
        1 => 'PLAY_LOUD_Palermo.PNG', 
        2 => 'PumaXOne_piece.PNG',
        3 => 'Tenis_Suede_XL.PNG',
        4 => 'Tenis_PWR NITRO™_SQD.PNG',
        5 => 'Tenis_FENTYxPUMA_AVANTI_VL.PNG',
        6 => 'Tenis Suede Trippy.PNG',
        7 => 'Tenis_Suede_Crafted.PNG',
        8 => 'sandaliaspuma.PNG',
        9 => 'Rebound V6.PNG',
        10 => 'Rebound_Joy.PNG',
        11 => 'Air_Jordan_1Low_Game Royal.PNG',
        12 => 'Nike_Dunk_Low_Retro.PNG',
        13 => 'AirJordan_1RetroHighOG_Midnight Navy.PNG',
        14 => 'Air Jordan 1 Mid.PNG',
        15 => 'Nike SB Zoom Blazer Mid.PNG',
        16 => 'Nike ACG Air Zoom Gaiadome GORE-TEX.PNG',
        17 => 'Nike Manoa Leather SE.PNG',
        18 => 'Nike Woodside 2.PNG',
        19 => 'Nike Alpha Huarache Elite 4 Low.PNG',
        20 => 'AirJordan4RM.PNG',
        21 => 'BOTA TACHAS EFECTO TERCIOPELO.PNG',
        22 => 'ZAPATO TACÓN PULSERA HEBILLA.PNG',
        23 => 'ZAPATO BORDÓN ZARA.PNG',
        24 => 'BOTA CHELSEA PIEL VOLUMEN.PNG',
        25 => 'BOTA TACÓN ANCHO PESPUNTE.PNG',
        26 => 'SANDALIA PLATAFORMA EFECTO TERCIOPELO.PNG',
        27 => 'BOTÍN SERRAJE.PNG',
        28 => 'BOTÍN TACÓN PESPUNTE.PNG',
        29 => 'BOTÍN PLATAFORMA PIEL.PNG',
        30 => 'SANDALIA PLATAFORMA ANTE.PNG',
        31 => 'Zapatillas Forum Low Cl.PNG',
        32 => 'Zapatillas Runfalcon 3.0.PNG',
        33 => 'Zapatillas Supernova 3 W.PNG',
        34 => 'Tacos Predator Accuracy.4.PNG',
        35 => 'Zapatillas Adidas Switch Fwd.PNG',
        36 => 'Zapatillas Advantage Lifestyle Court.PNG',
        37 => 'Zapatillas Showtheway 2.0.PNG',
        38 => 'Zapatillas Tensaur Run.PNG',
        39 => 'Zapatillas Supernova Stride.PNG',
        40 => 'Zapatillas Top Ten Rb.PNG',
        41 => 'Ankle-high sock boots.PNG',
        42 => 'Zapatillas de casa cálidas.PNG',
        43 => 'Botas Chelsea con suela gruesa.PNG',
        44 => 'Sandalias de cuña.PNG',
        45 => 'Sandalias con tiras cruzadas.PNG',
        46 => 'Zapatillas Drive Altas Para Hombre.PNG',
        47 => 'Botas Abner Para Hombre.PNG',
        48 => 'Botas Track.PNG',
        49 => 'Levis Mens Marshall Boots.PNG',
        50 => 'Chanclas Dixon.PNG',
        51 => 'Zapatillas UA Surge 3.PNG',
        52 => 'Zapatillas UA Mg Valsetz Trek Mid L.PNG',
        53 => 'Zapatillas UA Mojo 2.PNG',
        54 => 'Zapatillas UA Charged Aurora 2.PNG',
        55 => 'Zapatillas Ua Project Rock Bsr 4 Ufc.PNG',
        56 => 'zapatillas Uq blancas.PNG',
        57 => 'Botas con cordones.PNG',
        58 => 'gucci1.PNG',
        59 => 'Mens Gucci Jordaan loafer.PNG',
        60 => 'Mens loafer with leather Web.PNG',
        61 => 'Mens Interlocking G sneaker.PNG',
        62 => 'Mens Gucci Re-Web sneaker.PNG',
        63 => 'Mens Gucci Ace sneaker with Web.PNG',
        64 => 'Mens Horsebit 1953 loafer.PNG',
        65 => 'Mens loafer with Horsebit.PNG',
        66 => 'Zapatos de salón Mary Jane de charol.PNG',
        67 => 'Zapatos de salón de piel cepillada.PNG',
        68 => 'Bailarinas de charol naplak.PNG',
        69 => 'Mocasines de piel cepillada en dos tonos.PNG',
        70 => 'Botines de piel cepillada con tira.PNG',
        71 => 'High Street Choclo - S24100.PNG',
        72 => 'Tobin - A24103.PNG',
        73 => 'Run Star Legacy CX - J24200.PNG',
        74 => 'Converse Botin Fashion Pink - A24200.PNG',
        75 => 'Converse All Star Platform - J22201.PNG',
        76 => 'Converse Botín Clásico Navy - 06011.PNG',
        77 => 'Converse Chuck Low Black - 06021.PNG',
        78 => 'Converse Botín Clásico Monocrome - 06081.PNG',
        79 => 'Converse Botín Clásico White - 06011.PNG',
        80 => 'Converse Monocrome Chuck Low - 06071.PNG'
    ];

    foreach ($productos as &$producto) {
        $producto['imagen'] = $imagenes[$producto['id_producto']] ?? 'default.jpg';
    }
    require __DIR__ . '/../views/productos/index.php';
}

}
