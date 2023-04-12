<?php include("crudconex.php"); ?>
<!-- incluir conexion -->
<!-- ?php include('../../View/include/navbar.php'); ?> 
-- incluir header -->
<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MENSAJES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
      
      <!-- Formulario para añadir curso -->
      <div class="card card-body">
        <form action="Model/crud/insertar.php" method="POST">
        <input type="hidden" class="form-control mb-3" name="id" placeholder="id_cliente">
        <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="precio" class="form-control" placeholder="Precio" autofocus>
          </div> 
          <div class="form-group">
            <input type="text" name="horas" class="form-control" placeholder="Horas" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="nivel" class="form-control" placeholder="Nivel" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="profesor" class="form-control" placeholder="Profesor" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="institucion" class="form-control" placeholder="Institucion" autofocus>
          </div>
          <div class="form-group">
          <b>Fecha de Inscripción inicial</b> 
            <input type="date" name="fecha_inscripcion" class="form-control" placeholder="fecha inscripcion inicial" autofocus>
          </div>
          <div class="form-group">
          <b>Fecha de Inscripción final</b> 
            <input type="date" name="fecha_inscripcionF" class="form-control" placeholder="fecha inscripcion final" autofocus>
          </div>
          <b>Fecha de Inicio</b> 
          <div class="form-group">
            <input type="date" name="fecha_inicio" class="form-control" placeholder="Fecha Inicio" autofocus>
          </div>
          <div class="form-group">
          <b>Fecha de Cierre</b> 
            <input type="date" name="fecha_cierre" class="form-control" placeholder="Fecha Cierre" autofocus>
          </div>
          <div class="form-group">
            <input type="number" name="num_Alumnos" class="form-control" placeholder="Numero de Alumnos" autofocus>
          </div>
           <div class="form-group">
            <input type="text" name="modalidad" class="form-control" placeholder="Modalidad" autofocus>
          </div>
           
          <div class="form-group">
            <textarea name="descripcion" rows="2" class="form-control" placeholder=" Descripcion"></textarea>
          </div>
          <input type="submit" name="insertar" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
           <th>nombre</th>
           <th>precio</th>
           <th>horas</th>
           <th>nivel</th>
           <th>profesor</th>
           <th>institucion</th>
           <th>fecha_inscripcion</th>
           <th>fecha_inscripcionF</th>
           <th>fecha_inicio</th>
           <th>fecha_cierre</th>
           <th>num_Alumnos</th>
           <th>modalidad</th>
           <th>descripcion</th>
             <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
        $query = "SELECT * FROM clients";
        $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
                
           <td><?php  echo $row['nombre']?></td>
            <td><?php  echo $row['precio']?></td>
            <td><?php  echo $row['horas']?></td>
            <td><?php  echo $row['nivel']?></td>    
            <td><?php  echo $row['profesor']?></td>   
            <td><?php  echo $row['institucion']?></td> 
            <td><?php  echo $row['fecha_inscripcion']?></td> 
            <td><?php  echo $row['fecha_inscripcionF']?></td>
            <td><?php  echo $row['fecha_inicio']?></td>
            <td><?php  echo $row['fecha_cierre']?></td>    
            <td><?php  echo $row['num_Alumnos']?></td>   
            <td><?php  echo $row['modalidad']?></td> 
            <td><?php  echo $row['descripcion']?></td> 
            <td>
              <a href="Model/crud/editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="Model/crud/eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
<!-- incluir footer 
<--php include('../../View/include/footer.php');-->
