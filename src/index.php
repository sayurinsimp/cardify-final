<?php 
    require ('./php/inc/dbh.inc.php');
    $stmt = $pdo->query("SELECT * FROM deck");
    $decks = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardify</title>
    <link rel = "stylesheet" href = "./css/style.css">
    <link rel = "stylesheet" href = "./css/header.css">
    <link rel = "stylesheet" href = "./css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
    <?php include('./php/inc/header.php'); ?>

    <h1 class = "text-center">Decks</h1>

    <div class="list-group main__flashcard-list">
        <?php foreach ($decks as $deck): ?>
            <a href="deck.php?deck_id=<?php echo $deck['deck_id']; ?>" class="list-group-item list-group-item-action"><?php  echo $deck['deck_name']; ?></a>
        <?php endforeach; ?>
    
        <?php include('./php/inc/empty-fields.php'); ?>
    
    </div>

    <?php include('./php/inc/forms/add-deck.form.php'); ?>
</body>
</html>

