<?php require_once 'templates/header.php'; ?>
<?php require_once 'templates/navbar.php'; ?>
<?php 

require_once 'config.php';

if(isset($_GET['id'])){

	$id = $_GET['id'];
	$query = "SELECT * FROM inscripcion WHERE id=$id";
	$resultado = mysqli_query($conexion, $query);

	if(mysqli_num_rows($resultado) == 1){

       $row = mysqli_fetch_array($resultado);
       $id = $row['id'];
       $torneo = $row['torneo'];
       $equipos = $row['equipos'];
       $categoria = $row['categoria'];
	}
}

?>



<body>
<form action="actualizar_registro.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="form-group">
	<label>Torneo</label>
	<input class="form-control" type="text" name="torneo" value="<?php echo $torneo; ?>">
    </div>
	<div class="form-group">
	<label>Número de Equipos</label>
	<input class="form-control"type="number" name="equipos" value="<?php echo $equipos; ?>">
    </div>
	<div class="form-group">
	<label>Categoría</label>
	<input class="form-control" type="text" name="categoria" value="<?php echo $categoria; ?>">
    </div>
    <div class="form-group">
	<input class="btn btn-primary form-control" type="submit" value="Actualizar datos">
   </div>
 </form>
</body>
</html>