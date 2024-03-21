<?php include 'includes/header.php';

$nombreCliente = "Julieta";

//C onocer extencion de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

// Convertir a Mayusculas
echo strtoupper($nombreCliente);

// Converir a Minusculas
echo strtolower($nombreCliente);

$email1 = "correo@gmail.com";
$email2 = "Correo@gmail.com";

var_dump(strtolower($email1) === strtolower($email2));
echo str_replace('Julieta', 'juli', $nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente, 'Pedro');

$tipoCliente = "premium";
echo "<br>";

echo "  El cliente " . $nombreCliente . " es " . $tipoCliente;
 
include 'includes/footer.php';