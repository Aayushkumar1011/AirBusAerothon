<?php 
include("connection.php");

$aircraftselect="SELECT * FROM `aircraft`";
$aircraftquery=mysqli_query($con,$aircraftselect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Airbus Aerothon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<nav>
<div class="nav-wrapper">
    <a href="index.php" class="brand-logo">Airbus CMS</a>
</div>
</nav>
<div class="row">
    <div class="col m3">
    <div class="card">
     <div class="card-content">
     <h4><a href="index.php">Home</a></h4>
     <?php
      while ($array=mysqli_fetch_array($aircraftquery)) 
      {
          $aircraftname=$array[2];
          $aircraftmsn=$array[1];
          ?>
          <h4><a href="insertflight.php?aircraftmsn=<?php echo $aircraftmsn ?>"><?php echo $aircraftname; ?></a></h4>
      <?php }?>
        <h4><a href="index.php">Search & Filter</a></h4>
     </div>
    </div>
    
    </div>
    <div class="col m9">