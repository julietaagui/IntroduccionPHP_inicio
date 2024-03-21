<?php include 'includes/header.php';

function usuarioAutenticado(bool $autenticado ) :void {
    if($autenticado){
        echo "El usuario esta autenticado";
    }else{
        echo "Usuario no autenticado";
    }

}
$usuario = usuarioAutenticado(true);
echo $usuario;



include 'includes/footer.php';