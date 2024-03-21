<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'karen');
$cliente = [
    'nombre' => 'juli',
    'saldo' => 200
];

// Empty- Revisa si algun arreglo esta vacio
var_dump( empty($clientes) );
var_dump( empty($clientes2) );
var_dump( empty($clientes3) );

// Isset -Revisa si un arreglo esta creado o una propiedad esta definida
echo "<br>";
var_dump(isset($clientes4));
var_dump(isset($clientes3));
var_dump(isset($clientes2));
var_dump(isset($clientes));

// Isset - permite erevisar que una propiedad de un arreglo asociativo, exista!
var_dump(isset($cliente['nombre']));
var_dump(isset($cliente['codigo']));
include 'includes/footer.php';