<!DOCTYPE html>
<html>
<head>
	<title>ACTUALIZAR</title>
	<link rel="stylesheet" type="text/css" href="../core/css/bootstrap.min.css">
</head>
<body>
   <center>

   <div class="page-header">
   <h1><small>Actualizar</small></h1>
   </div>
        </center>
<form action="../controlador/control.php" method="post">

<?php foreach($datos as $editar):?>

<div class="col-sm-3">
<label for="id">id de la categoria</label>
<input type="text" class="form-control" name="id_categoria" value=" <?php echo $editar['id_categoria']; ?>">	
</div>
<div class="col-sm-3">
<label for="id">nombre de la categoria</label>
<input type="text" class=" form-control" name="categoria_nombre" value=" <?php echo $editar['categoria_nombre']; ?>">	
</div>
<div class="col-sm-3">
<label for="id">descripcion de la categoria</label>
<input type="text" class="form-control" name="categoria_descripcion" value=" <?php echo $editar['categoria_descripcion'];?>">	
</div>
<br>
<div>
	<input type="submit" class="btn btn-info" name="actualizar" value="actualizar">
</div>

<?php endforeach; ?>
</form>



</body>
</html>