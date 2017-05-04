<!DOCTYPE html>
<html>
<head>
	<title>LEER</title>

	<link rel="stylesheet" type="text/css" href="../core/css/bootstrap.min.css">

</head>
<body>
<a href="../vista/vista.crear.php" class="btn btn-info">crear</a>
<center>
<div class="page-header">
<h1><small>Resultado</small></h1>
</div>

</center>
<table class="table table-bordered">
<thead>
<tr>
<th>id de lacategoria</th>
<th>nombre de la categoria</th>
<th>descripcion de la categoria</th>
<th>Editar</th>
<th>Eliminar</th>


</tr>
</thead>

<tbody>
<tr>
<?php foreach ($datos as $row):?>

<td><?php echo $row['id_categoria']; ?></td>	
<td><?php echo $row['categoria_nombre']; ?></td>
<td><?php echo $row['categoria_descripcion']; ?></td>

<td><a href="../controlador/control.php?id_editar=<?php echo $row['id_categoria']; ?>" class="btn btn-info">Editar</a></td>
<td><a href="../controlador/control.php?id_eliminar=<?php echo $row['id_categoria']; ?>" class="btn btn-danger">Eliminar</a></td>

</tr>

</tbody>


<?php endforeach; ?>
</table>


</body>
</html>