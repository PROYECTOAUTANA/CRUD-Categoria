<!DOCTYPE html>
<html>
<head>
	<title>CREAR</title>
	<link rel="stylesheet" type="text/css" href="../core/css/bootstrap.min.css">
</head>
<body>
  <center>
 <div class="page-header" style="background-color:black">
  <h1><small>crear categoria</small></h1>
  </div>
    </center>

    <form action="../controlador/control.php" method="post">

    <div class="col-sm-3">
    <label for="id_categoria">id de la categoria</label>
    
    <input class="form-control" type="text"  name="id_categoria" placeholder="id">
    </div>	
      <div class="col-sm-3">
      <label for="categoria_nombre">Nombre de la categoria</label>
      <input class="form-control" type=""  name="categoria_nombre" placeholder="nombre">
      </div>
        <div class="col-sm-3">
        <label  for="categoria_descripcion">descripcion de la categoria</label>

         <input class="form-control" type="text"  name="categoria_descripcion" placeholder="descripcion">
         </div>
          <br><br><br><br>
           <input class="btn btn-success" type="submit"  name="insertar" value="guardar">
       <input class="btn btn-danger" type="reset"  name="borrar" value="borrar">

    </form>
    <br>
    <div>
    
   <form action="../controlador/control.php" method="post">
   <input type="submit" class="btn btn-info" name=" leer" value="mostrar">
    </div>
   </form>

</body>
</html>