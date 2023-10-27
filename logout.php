<?php
include 'menuNavegacion.php';


// Verificar si la sesión está activa
if (session_status() === PHP_SESSION_ACTIVE) {
    // La sesión está activa, entonces la destruimos
    session_unset(); // Limpia las variables de sesión
    session_destroy(); // Destruye la sesión
}



?>
<div class='row justify-content-center align-items-center' style="height:300px;">
	<div class='col-6 text-center'><h6>Bye!</h6> </div>
</div>
<?php
include 'footer.php';

?>

