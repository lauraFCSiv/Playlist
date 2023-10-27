<?php

require_once 'includes/funcionesBD.php';
require_once 'includes/funciones.php';



    
    $result = loginUser("usuario1@gmail.com","123" );
    //al hacer fetch_assoc() se mueve el cursor
    if($result->fetch_assoc() == null){
        echo "<p>Revisa el usuario / contraseña introducido</p>";
    }else{
        while ($row = $result->fetch_assoc()) {
            if ($row == null){
                
            }else{
                printf ("%s (%s)\n", $row["idUsuario"], $row["alias"]);
                $_SESSION['usuario'] = $row['idUsuario'];
                $_SESSION['nombreUsuario'] = $row['alias'];
                //header("Location:index.php");
                
            }
           
        }
        
        
    }
