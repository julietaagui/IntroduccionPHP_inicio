<?php include 'includes/header.php';

$carrito = ['Tablet', 'Televisor', 'Computadora'];

// Util para ver los contenidos en un array
echo "<pre>";
var_dump($carrito);
echo "<pre>";

// Acceder a un elemento del array
echo $carrito[1];

// Añade un nuevo elemento en el indice 3 del arreglo
$carrito[3] = "Nuevo producto";
echo $carrito;

// Añadir un elemento nuevo al final
array_push($carrito, 'Audfonos');

// Añadir un elemento nuevo al inicio
array_unshift($carrito, "noteboock");

// Util para ver los contenidos en un array
echo "<pre>";
var_dump($carrito);
echo "<pre>";

$cliente = array('Cliente1', 'Cliente2', 'Cliente3');
echo "<pre>";
var_dump($cliente);
echo "<pre>";

echo $cliente[1];

include 'includes/footer.php';