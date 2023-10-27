<?php 
include 'menuNavegacion.php';
?>
         

<div class="row">
    <div class="col-6">  
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
        $letraCancion = $row['lyris'];
        echo "<div><p><marquee width='60%' direction='right' height='100px'>
Está sonando:".$row['name']."</marquee></p></div><audio src='".$row['path']."' controls></audio></div>";
        echo "<div class='col-6 mb-4' ><div class='marquee-container'><div class='marquee-content'><div class='marquee'><p>".$letraCancion."</p></div></div</div></div>";
        
    }
} 

?>
        
    
    
</div>
<script type="text/javascript">
  function enviarFormulario() {   
    var audioElement = document.getElementById('miAudio');
    if (audioElement){
     var padre = audioElement.remove();
     }
    const formulario = document.getElementById('miFormulario');
    alert('HOLA');
    
    formulario.submit();
    
   
  }

 
  setInterval(enviarFormulario, 1 * 2 * 1000);
</script>

</div>
</body>
</html>