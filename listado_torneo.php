<?php require_once 'templates/header.php'; ?>
<?php require_once 'templates/navbar.php'; ?>
<?php require_once 'config.php';?>

<div class="container">
<h1 class="text-center">Listado de Torneo</h1>
<div class="table-responsive">
<table class="table table-dark table-striped table-bordered table-hover">
	<thead>
        <tr>
	    <th>Torneo</th>
		<th>Número de Equipos</th>
		<th>Categoría</th>
		<th>Editar</th>
		<th>Eliminar</th>
		</tr>
   </thead>
   <tbody>
   	<?php 
   	  $query = "SELECT * FROM inscripcion";
   	  $resultado = mysqli_query($conexion, $query);
      while($datos = mysqli_fetch_array($resultado)){ ?>
      <tr>
      <th><?php echo $datos['torneo']; ?></th>
      <th><?php echo $datos['equipos']; ?></th>
      <th><?php echo $datos['categoria'];?></th>
      <th><a href="editar.php?id=<?php echo $datos['id']; ?>"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a></th>
      <th><a href="eliminar.php?id=<?php echo $datos['id']; ?>"><i class="fa-solid fa-trash"></i></a></th>
     </tr>
      <?php } ?>
   </tbody>
 </table>
</div>
</div>