<?php 
include 'menuNavegacion.php';
require_once 'includes/funcionesBD.php';
require_once 'includes/funciones.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $result = loginUser($_POST['inputEmail'], $_POST['inputPassword']);
    
    if($result->fetch_assoc() == null){
       echo "<p>Revisa el usuario / contraseña introducido</p>";
    }else{  
        while ($row = $result->fetch_assoc()) {
            echo "HOLA";
           // $_SESSION['usuario'] = $row['idUsuario'];
           // $_SESSION['nombreUsuario'] = $row['alias'];
            //header("Location:index.php");
        }
        

    }
}

?>
          <div  class="row align-items-center justify-content-center mt-5">
         	<div class="col-4">
                <form method="post">
                  <div class="form-group mb-4">
                    <input type="email" class="form-control" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">              
                  </div>
                  <div class="form-group mb-4">
                    <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                  </div>  
                  <div class="d-grid">
  					<button class="btn btn-primary" type="submit">Login</button>
				  </div>            
                </form>
			</div>
		</div>



        
<?php 
include 'footer.php';
?>
    
