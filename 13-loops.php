<?php include 'includes/header.php';

// While
$i = 0; // Inicializador o Incremento

// Una manera para no usar muchas llaves
while($i < 10):

    echo $i . "<br>";

    $i++;//Incremento

endwhile;

// };
// echo "<br>";
// //Do while 

// $i = 0;

// do{
//     echo $i . "<br>";

//     $i++;
// }while($i < 10);


// // For loop  
// for($i = 0; $i < 10; $i++){
//     echo $i . "<br>";
// };

/**
 * multiplo de 3 imprimir frizz
 * multipolo de 5 imprimir Buzz
 * multiplo de 3 y 5 imprimir Frizz Buzz
 */
// for($i = 1; $i < 1000; $i++){
//     if($i % 15 === 0){
//         echo $i . "- FIZZ BUZZ <br>";  
//       }
//     else if($i % 3 === 0){
//       echo $i . "- FIZZ <br>";  
//     }
//     else if($i % 5 === 0){
//         echo $i . "- BUZZ <br>";  
//       }
    
// };


// For Each
$clientes = array('Pedro', 'Juan', 'Karen');

foreach( $clientes as $cliente){ // con el as se crea un alias para que lo vaya recorriendo sin tener que iterarlo 
    echo $cliente . '<br>';
}
echo count($clientes);


$cliente = [
    'nombre' => 'Juli',
    'Saldo' => 200,
    'Tipo' => 'Premium'
];

foreach( $cliente as $key => $valor):
    echo $key . ' - ' . $valor . '<br>';
endforeach;




include 'includes/footer.php';