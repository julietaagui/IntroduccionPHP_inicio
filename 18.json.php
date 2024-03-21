<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Table',
        'precio' => 200,
        'disponible' => true  
    ],
    [
        'nombre' => 'Televisión 24"',
        'precio' => 300,
        'disponible' => true  
      ],
    [
        'nombre' => 'Monitor curvo',
        'precio' => 400,
        'disponible' => false  
      ]
];

echo "<pre>";
var_dump($productos);

// de arreglo a String
$json = json_encode($productos, JSON_UNESCAPED_UNICODE); // Constante de php (para los acentos)
var_dump($json); 
echo "<pre>";

// de string a arreglo 
$json_array = json_decode($json);
var_dump($json_array); 
echo "<pre>";

include 'includes/footer.php';