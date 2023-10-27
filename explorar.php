<?php 
include 'menuNavegacion.php';
?>

		<div class="row gy-5">
			<div class="col-12">
				<form method="post">
				 <input type="hidden" name="formulario" value="formularioBusqueda">
					<div class="form-outline">
						<input type="search" id="exploreSongName" name="exploreSongName"
							class="form-control" placeholder="Buscar por nombre"
							aria-label="Search" />
					</div>
				</form>
			</div>

			<div class="col-1"></div>
			<div class="col-10">
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="text-center" scope="col">Nombre</th>
							<th class="text-center" scope="col">Artista</th>
							<th class="text-center" scope="col">Género</th>
							<th class="text-center" scope="col">Album</th>
							<th class="text-center" scope="col">Fecha de lanzamiento</th>
						</tr>
    

  
<?php
require_once 'includes/funciones.php';
require_once 'includes/funcionesBD.php';

if (isset($_POST['formularioBusqueda']) && isset($_POST['exploreSongName'])) {
    $nombre = $_POST['exploreSongName'];
    $result = getSongsByName($nombre);
    while ($row = $result->fetch_assoc()) {
        echo "<tr class='table-light text-center'><td>" . $row['name'] . "</td><td>" . $row['artist'] . "</td><td>" . $row['genre'] . "</td><td>" . $row['album'] . "</td><td>" . $row['release_date'] . "</td></tr>";
    }
} else if (isset($_POST['formularioFavoritos'])) {
    insertarFavorito($_SESSION['idUsuario'],$_POST['idCancion']);
   
} else {
    $result2 = getAllSongs();
    while ($row2 = $result2->fetch_assoc()) {
        echo "<tr class='table-light text-center'>
                <td>" . $row2['name'] . "</td>
                <td>" . $row2['artist'] . "</td>
                <td>" . $row2['genre'] . "</td>
                <td>" . $row2['album'] . "</td>
                <td>" . $row2['release_date'] . "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='formulario' value='formularioFavoritos'>
                        <input type='hidden' name='idCancion' value='".$row2['id']."'></input>
                        <button type='submit' class='btn btn-outline-danger'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-heart' viewBox='0 0 16 16'>
                                <path d='m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z'></path>
                            </svg>
                        </button>
                </td>
              </tr>";
        
    }
}

?>
	
				</table>
			</div>
			<div class="col-1"></div>
		</div>
	</div>
	<?php 
	include 'footer.php';
	?>

</body>


</html>