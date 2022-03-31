<?php

session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espaceMembre','root', '');

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
    $getId = intval($_GET['id']);
    $reqUser = $bdd->prepare('SELECT * FROM membres WHERE id= ?');
    $reqUser->execute(array($getId));
    $userInfo = $reqUser->fetch();

?>

<html>
    <head>
        <title>Tuto PHP</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./CSS/formulaire.css">
    </head>

    <body>
        <div>
            <h2>Profil de <?php echo $userInfo['pseudo']; ?></h2>
            <br><br>
            Pseudo = <?php echo $userInfo['pseudo']; ?>
            <br>
            Mail = <?php echo $userInfo['mail']; ?>
            <?php 
            if(isset($_SESSION['id']) AND $userInfo['id'] == $_SESSION['id'])
            {
            ?>
            <br>
            <a href="editProfil.php">Éditer mon profil</a>
            <a href="deconnexion.php">Se déconecter</a>
            <?php
            }
            ?>
            
            
        </div>
</html>
<?php
}
?>