<?php
include("crudconex.php");

$nombre='';
$precio='';
$horas='';
$nivel='';
$profesor='';
$institucion='';
$fecha_inscripcion='';
$fecha_inscripcionF='';
$fecha_inicio='';
$fecha_cierre='';
$num_Alumnos='';
$modalidad='';
$descripcion='';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM clients WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
$row = mysqli_fetch_array($result);
$nombre=$row['nombre'];
$precio=$row['precio'];
$horas=$row['horas'];
$nivel=$row['nivel'];
$profesor=$row['profesor'];
$institucion=$row['institucion'];
$fecha_inscripcion=$row['fecha_inscripcion'];
$fecha_inscripcionF=$row['fecha_inscripcionF'];
$fecha_inicio=$row['fecha_inicio'];
$fecha_cierre=$row['fecha_cierre'];
$num_Alumnos=$row['num_Alumnos'];
$modalidad=$row['modalidad'];
$descripcion=$row['descripcion'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$horas=$_POST['horas'];
$nivel=$_POST['nivel'];
$profesor=$_POST['profesor'];
$institucion=$_POST['institucion'];
$fecha_inscripcion=$_POST['fecha_inscripcion'];
$fecha_inscripcionF=$_POST['fecha_inscripcionF'];
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_cierre=$_POST['fecha_cierre'];
$num_Alumnos=$_POST['num_Alumnos'];
$modalidad=$_POST['modalidad'];
$descripcion=$_POST['descripcion'];

  $query = "UPDATE clients set nombre = '$nombre', precio = '$precio', horas = '$horas', nivel = '$nivel', profesor = '$profesor',institucion = '$institucion', fecha_inscripcion = '$fecha_inscripcion',fecha_inscripcionF='$fecha_inscripcionF',fecha_inicio='$fecha_inicio',fecha_cierre='$fecha_cierre',num_Alumnos = '$num_Alumnos', modalidad = '$modalidad', descripcion = '$descripcion' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: ../../index.php');
}

?>
<?php include('../../View/include/navbar.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualizar nombre">
        </div>
        <div class="form-group">
          <input name="precio" type="text" class="form-control" value="<?php echo $precio; ?>" placeholder="Actualizar precio">
        </div>
        <div class="form-group">
          <input name="horas" type="text" class="form-control" value="<?php echo $horas; ?>" placeholder="Actualizar horas">
        </div>
        <div class="form-group">
          <input name="nivel" type="text" class="form-control" value="<?php echo $nivel; ?>" placeholder="Actualizar nivel">
        </div>
        <div class="form-group">
          <input name="profesor" type="text" class="form-control" value="<?php echo $profesor; ?>" placeholder="Actualizar profesor">
        </div>
        <div class="form-group">
          <input name="institucion" type="text" class="form-control" value="<?php echo $institucion; ?>" placeholder="Actualizar institucion">
        </div>
        <div class="form-group">
          <input name="fecha_inscripcion" type="date" class="form-control" value="<?php echo $fecha_inscripcion; ?>" placeholder="Actualizar fecha_inscripcion">
        </div>
        <div class="form-group">
          <input name="fecha_inscripcionF" type="date" class="form-control" value="<?php echo $fecha_inscripcionF; ?>" placeholder="Actualizar fecha_inscripcionF">
        </div>
        <div class="form-group">
          <input name="fecha_inicio" type="date" class="form-control" value="<?php echo $fecha_inicio; ?>" placeholder="Actualizar fecha_inicio">
        </div>
        <div class="form-group">
          <input name="fecha_cierre" type="date" class="form-control" value="<?php echo $fecha_cierre; ?>" placeholder="Actualizar fecha_cierre">
        </div>
        <div class="form-group">
          <input name="num_Alumnos" type="number" class="form-control" value="<?php echo $num_Alumnos; ?>" placeholder="Actualizar num_Alumnos">
        </div>
        <div class="form-group">
          <input name="modalidad" type="text" class="form-control" value="<?php echo $modalidad; ?>" placeholder="Actualizar modalidad">
        </div>
       
        <div class="form-group">
        <textarea name="descripcion" class="form-control" cols="30" rows="10"><?php echo $descripcion;?></textarea>
        </div>
        
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('../../View/include/footer.php'); ?>
