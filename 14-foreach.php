<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Table',
        'precio' => 200,
        'disponible' => true  
    ],
    [
        'nombre' => 'Televisor 24"',
        'precio' => 300,
        'disponible' => true  
      ],
    [
        'nombre' => 'Monitor curvo',
        'precio' => 400,
        'disponible' => false  
      ]
];

foreach( $productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?></p>
        <p>Precio: <?php echo "$" . $producto['precio']; ?></p>
        <p> <?php echo ($producto['disponible'])? 'Disponible': 'No Disponible' ?> </p> <!--Operador ternario -->
        
    <li>
    <?php
}
/* otra manera
<?php 
if($producto['disponible']){
    echo "<p>Disponible<p>"; 
}else{
    echo "<p>No Disponible<p>";
}
?>
*/
include 'includes/footer.php';