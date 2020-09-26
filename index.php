<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
<h1  > la liste des derniers billets:</h1>
<?php
include ("connexion.php");
$x=$pdo->query('SELECT * FROM billets ORDER BY date_creation DESC LIMIT 0,5');
while($d=$x->fetch()){
    ?>
    <h3>
        <?php echo htmlspecialchars($d['titre']).'le'.htmlspecialchars($d['date_creation']); ?>
    </h3>
    <?php echo htmlspecialchars($d['contenu']).'</br>'; ?>
    <?php echo '<pre>';?>
    <?php  print_r($d['id']) ;
    $_SESSION['identifiant']=$d['id'];
    echo "mp". $_SESSION['identifiant']. "mp";?>
    <a href="commentaire.php?identifiant=<?php echo $_SESSION['identifiant']?>">Commentaire</a>
    <?php
}
$x->closeCursor();
?>
</body>
</html>