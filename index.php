<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    require 'connec.php';
    require_once 'classes/MyHouse.php';
    require_once 'classes/MyHouse1.php';
    require_once 'classes/MyHouse2.php';
    
    $pdo = new PDO(DSN, USER, PASS);

    $query = 'SELECT * FROM numberOfHouse';
    $statement = $pdo->query($query);
    $houses = $statement->fetchAll(PDO::FETCH_ASSOC);

    //var_dump($houses);
    
    $greenHouse = new MyHouse1();
    $blueHouse = new MyHouse2();
    
    ?>

    <?php 
    $totalGreen = 0;
    foreach ($houses as $house) {
        $totalGreen += $house['greenHouse'];
    }
    $totalGreen;

    $totalBlue = 0;
    foreach ($houses as $house) {
        $totalBlue += $house['blueHouse'];
    }
    $totalBlue;
?>

<header>
    
    <button class="colorBtn">House In Red</button>
    
</header>

<?php include "form.php"; ?>
    
<div class="container mt-5">
        
<div class="row mt-5">
<?php for ($i=0; $i <= $totalGreen - 1; $i++):?>
  <div class="col-sm-4 ">
  
    <div class="card mx-auto">
      <div class="card-body">
         
            <?php echo $greenHouse->generate('green', 150); ?>
                
      </div>
    </div>  
  </div>
  <?php endfor; ?>
</div>

<div class="row">
<?php for ($i=0; $i <= $totalBlue - 1; $i++):?>
  <div class="col-sm-4 mt-5">
  
    <div class="card mx-auto" style="max-width:200px">
      <div class="card-body">

            <?php echo $blueHouse->generate('blue', 150); ?>

      </div>
    </div>
    
  </div>
  <?php endfor; ?>
</div>
</div>
<footer class="container text-center mt-5">
    <p class="text-muted">
        <small>
            &copy; 2021 &middot;
            Built with <span class="text-danger">&hearts;</span>
            by <a href="#"> a Wilder</a>
        </small>
    </p>
</footer>

    <script src="scripts.js"></script>
</body>
</html>