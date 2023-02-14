<?php require_once 'templates/header.php'; ?>
<?php require_once 'templates/navbar.php'; ?>
<h1 class="text-center">Inscripción Torneo de Fútbol</h1>
<form action="inscripcion.php" method="POST">
	<div class="form-group">
	<label>Torneo</label>
	<input class="form-control" type="text" name="torneo">
    </div>
	<div class="form-group">
	<label>Número de Equipos</label>
	<input class="form-control"type="number" name="equipos">
    </div>
	<div class="form-group">
	<label>Categoría</label>
	<input class="form-control" type="text" name="categoria">
    </div>
    <div class="form-group">
	<input class="btn btn-primary form-control" type="submit" value="Inscripción">
   </div>
   <div class="form-group">
	<a class="btn btn-primary form-control" href='listado_torneo.php'>Listado de Torneos</a>
   </div>
</form>
</body>
</html>