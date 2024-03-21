<?php include 'includes/header.php';

// in_array - buscar elementos en un arreglo
$carrito = ['Tablet', 'computadora', 'Televisor'];

var_dump( in_array('Tablet', $carrito));

// Ordenar elementos de un arreglo
$numeros = array(1,2,5,8,7,9);
sort($numeros); // de menor a mayot
rsort($numeros); // de mayor a menor  

echo "<pre>";
var_dump($numeros);
echo "<pre>";

//Ordenar arreglos asociativos 
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juli'
);

asort($cliente); // Ordena por valores (orden alfabetico)
arsort($cliente); // Ordena por valores (orden alfabetico) de la Z a la A
ksort($cliente); // Ordena por llaves (orden alfabetico)
krsort($cliente); // Ordena por llaves (orden alfabetico), de la Z a la A


echo "<pre>";
var_dump($cliente);
echo "<pre>";

include 'includes/footer.php';