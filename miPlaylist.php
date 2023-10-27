<?php 
include 'menuNavegacion.php';
?>

<div class="row">
    <div class="col-lg-6 col-md-12 col-xs-12 mb-4 justify-content-center">  
    <form method="post" style="margin-bottom:50px;">
    <div class="input-group">
  		<input type="search" id="songName" name="songName" class="form-control rounded" placeholder="Nombre de la canción" aria-label="Buscar" aria-describedby="search-addon" />
  		<button type="submit" class="btn btn-outline-primary">Buscar</button>
	</div>
       </form>


    
  
<?php
require_once 'includes/funciones.php';
require_once 'includes/funcionesBD.php';



if (isset($_POST['songName'])) {
    $nombre = $_POST['songName'];    
    $result = getSongsByName($nombre);
    while ($row = $result->fetch_assoc()) {
        echo "<div><p><marquee width='100%' direction='right' height='30px'>
Está sonando:".$row['name']."</marquee></p></div><audio style='width:100%;' src='".$row['path']."' controls></audio></div>";
        echo "<div class='col-lg-6 mb-4 d-none d-lg-block'><img src='".$row['cover']."' class='img-fluid' style='height:250px;width:60%;'></img></div></div></div></div>";
        
    }
}else{
    echo "</div></div></div>";
} 

?>
        
<?php 
include 'footer.php';
?>
    
    
	
</body>
</html>