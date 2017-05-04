
<?php

class Categoria

{

private $conectar;

public function __construct(){

$this->conectar=new PDO("pgsql:host=localhost;port=5432;dbname=categorias",'crud','catego');

}


public function insertar($id_categoria,$categoria_nombre,$categoria_descripcion){

	echo $id;

$consulta = $this->conectar->prepare("INSERT INTO categoria(id_categoria,categoria_nombre,categoria_descripcion) VALUES ('$id_categoria','$categoria_nombre','$categoria_descripcion')");
$consulta->execute();
$resultados = $consulta->fetchAll();
return $resultados;

}



public function leer(){

$consulta = $this->conectar->prepare("SELECT *FROM categoria");
$consulta->execute();
$resultados = $consulta->fetchAll();
return $resultados;

}




public function editar($id_categoria){
$consulta = $this->conectar->prepare("SELECT *FROM categoria  WHERE id_categoria='$id_categoria'");
$consulta->execute();
$resultados = $consulta->fetchAll();
return $resultados;

}



public function actualizar($id_categoria,$categoria_nombre,$categoria_descripcion){

$consulta = $this->conectar->prepare("UPDATE categoria SET categoria_nombre='$categoria_nombre',categoria_descripcion='$categoria_descripcion' WHERE id_categoria='$id_categoria'");

$consulta->execute();
$resultados = $consulta->fetchAll();
return $resultados;

}


public function eliminar($id_categoria){
$consulta = $this->conectar->prepare("DELETE FROM categoria WHERE id_categoria='$id_categoria'");
$consulta->execute();
$resultados = $consulta->fetchAll();
return $resultados;

}


}




?>