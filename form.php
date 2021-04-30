<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test applicatif</title>
</head>
<body>
<div class="row mt-5 text-center form-house">
    <div class="col-md-6 mx-auto">
    
        <h1 class="text-center mt-5"><h2>Veuillez renseigner le nombre de maison à dessiner</h2>

    <form  action=""  method="post">
    <div class="row mt-5">
        <div class="col-md-6 p-1">
            
            <input  type="number"  id="greenHouse"  name="greenHouse" placeholder="Maisons vertes">
            <?php if (!empty($_GET['greenHouse'])) : ?>
                <?= $_GET['greenHouse'] ?>
            <?php endif; ?>
        </div>
        
        <div class="col-md-6 p-1">
            <input type="number"  id="blueHouse"  name="blueHouse" placeholder="Maison blue"></input>
            <?php if (!empty($_GET['blueHouse'])) : ?>
                <?= $_GET['blueHouse'] ?>
            <?php endif; ?>
        </div>
    
        <div  class="drawingBtn text-center mt-3 mb-5">
        <button  type="submit">Dessiner</button>
        </div>
    </form>
    </div>
</div>
<?php
$errors = [];

if(empty($_POST['greenHouse']))
    {
        $errors['greenHouse'] = "Entrez un nombre de maison vert svp!";  
    } 
    if(empty($_POST['blueHouse']))
    {
        $errors['blueHouse'] = "Entrez un nombre de maison bleu svp!";
    }

    if (count($errors) === 0) {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $query = 'INSERT INTO numberOfHouse (greenHouse, blueHouse) VALUES (:greenHouse, :blueHouse)';
            $statement = $pdo->prepare($query);
            $statement->bindValue(':greenHouse', $_POST['greenHouse'], PDO::PARAM_STR);
            $statement->bindValue(':blueHouse', $_POST['blueHouse'], PDO::PARAM_STR);
            $statement->execute();
        }
    }

?>

</body>
</html>