<?php
  session_start();

  require 'Model/db.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Plataforma cursos</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <link rel="stylesheet" href="View/css/style.css">
  </head>
  <body>
    <?php require 'View/layaut/header.php' ?>



    <?php if(!empty($user)): ?>
     
      <?php include('View/include/navbar.php'); ?> 
      
      <?php require 'Model/crud/tabCursos.php' ?>
      
      <?php include('View/include/footer.php'); ?>

     
    <?php else: ?>
      <h1>Bienvenido a la plataforma de cursos</h1>
      
      
      <h2>Porfavor Inicie Seccion o Registrese</h2>

      <a href="Controller/login.php">Ingresa</a> or
      <a href="Controller/signup.php">Registrate</a>





    <?php endif; ?>
  </body>
</html>