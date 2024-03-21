<?php include 'includes/header.php';

$auntenticado =  true;
$admin = false;

if($auntenticado && $admin){
    echo 'Usuario autenticado correctamente';
}else{
    echo 'Usiuario no autenticado, inicia sesión';
}

// If anidados
$cliente = [
    'nombre' => 'juli',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<br>";

if( !empty($cliente)){
    echo 'El arreglo de cliente no esta vacio';

    if($cliente['saldo'] > 0){
        echo 'El cliente tiene saldo disponible';
    }else{
        echo 'No hay saldo';
    }
}

// else if
if($cliente['saldo'] > 0){
    echo "El cliente tiene saldo"; 
}else if($cliente['informacion']['tipo'] === 'premium'){
    echo "El cliente es premium";
}else{
    echo "No hay cliente definido o no tiene saldo o no es premium";
}


//Switch 
echo "<br>";
$tecnologia = 'HTML';

switch($tecnologia){
    case 'PHP':
        echo "PHP es un exelente lenfuaje";
        break;
    case 'JavaScript':
        echo "Genial lenguaje de la web";
        break;
    case 'HTML':
        echo "emmm";
        break;
    default:
        echo "Algun lenguaje que no se cual es";
        break;
}


include 'includes/footer.php';asort($cliente);
