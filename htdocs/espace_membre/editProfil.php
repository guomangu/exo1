<?php

session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espaceMembre','root', '');

if(isset($_SESSION['id']) AND $_GET['id'] > 0)
{
    $reqUser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
    $reqUser->execute(array($_SESSION['id']));
    $user = $reqUser->fetch();
?>

<html>
    <head>
        <title>Tuto PHP</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./CSS/formulaire.css">
    </head>

    <body>
        <div>
            <h2>Édition de mon profil</h2>
            
            <form method="POST" action=""></form>
            <input type="text" name="newPseudo" placeholder="Pseudo" value=""><br>
            <input type="text" name="newmail" placeholder="Mail"><br>
            <input type="text" name="newMdp1" placeholder="Mot de passe"><br>
            <input type="text" name="newMdp2" placeholder="Confirmation mot de passe"><br>
            <input type="submit" value="Mettre à jour mon profil !">
        </div>
</html>
<?php
}
else
{
    header("Location: connexion.php");
}
?>