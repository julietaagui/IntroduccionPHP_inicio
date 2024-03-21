<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Juan', 
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente);
echo "<pre>";

// Para acceder
// echo $cliente['nombre'];
// echo $cliente['informacion'] ['disponible'];

$cliente['codigo'] = 6515151313;

echo "<pre>";
var_dump($cliente );
echo "<pre>";


include 'includes/footer.php';