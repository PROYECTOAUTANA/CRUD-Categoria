<?php




if(isset($_POST['insertar'])){

require_once "../modelo/model.GBD.php";

	$id_categoria=$_POST['id_categoria'];
$categoria_nombre=$_POST['categoria_nombre'];
$categoria_descripcion=$_POST['categoria_descripcion'];

$Categoria=new Categoria();
$Categoria->insertar($id_categoria,$categoria_nombre,$categoria_descripcion);

header("location:../vista/vista.crear.php");

}


if (isset($_POST['leer'])) {


	require_once "../modelo/model.GBD.php";

	$Categoria=new Categoria();
$datos=$Categoria->leer();

require_once "../vista/vista.leer.php";

}




if (isset($_GET['id_editar'])) {


	require_once "../modelo/model.GBD.php";

$id_categoria=$_GET['id_editar'];

	$Categoria=new Categoria();
$datos=$Categoria->editar($id_categoria);

require_once"../vista/vista.actualizar.php";

}




if(isset($_POST['actualizar'])){

require_once "../modelo/model.GBD.php";

	$id_categoria=$_POST['id_categoria'];
$categoria_nombre=$_POST['categoria_nombre'];
$categoria_descripcion=$_POST['categoria_descripcion'];

$Categoria=new Categoria();
$datos=$Categoria->actualizar($id_categoria,$categoria_nombre,$categoria_descripcion);

header("location:../vista/vista.crear.php");

}




if (isset($_GET['id_eliminar'])) {


	require_once "../modelo/model.GBD.php";

$id_categoria=$_GET['id_eliminar'];

	$Categoria=new Categoria();
$Categoria->eliminar($id_categoria);

header( "location:../vista/vista.crear.php");

}

?>