<?php

session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espaceMembre','root', '');

if(isset($_POST['formConnect']))
{
    $pseudoConnect = htmlspecialchars($_POST['pseudoConnect']);
    $mdpConnect = $_POST['mdpConnect'];

    if(!empty($pseudoConnect) AND !empty($mdpConnect))
    {
        $reqUser = $bdd->prepare('SELECT * FROM membres WHERE pseudo = ?');
        $reqUser->execute(array($pseudoConnect));
        $userExist = $reqUser->rowCount();
        if($userExist == 1)
        {
            $userInfo = $reqUser->fetch();
            if(password_verify($mdpConnect, $userInfo['motDePasse']))
            {
                
                $_SESSION['id'] = $userInfo['id'];
                $_SESSION['pseudo'] = $userInfo['pseudo'];
                $_SESSION['mail'] = $userInfo['mail'];
                header("Location: profils.php?id=".$_SESSION['id']);
            }
            else
            {
                $erreur = "Mauvais identifiants !";
            }
        }
        else
        {
            $erreur = "WHAT";
        }
        
    }
    else
    {
        $erreur = "Tous les champs doivent être remplis !";
    }
}

?>
<html>
    <head>
        <title>Tuto PHP</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./CSS/formulaire.css">
    </head>

    <body>
        <div> 
            <h2>Conexion</h2>
            <br><br>
            <form method="POST" action="">
                <input type="text" name="pseudoConnect" placeholder="pseudo"><br>
                <input type="password" name="mdpConnect" placeholder="Mot de passe"><br>
                <input type="submit" name="formConnect" value="Se connecter !">
            </form>
            <p>Pas encore de compte cliquez <a href="inscription.php">ici</a></p>
        </div>

<?php 
if(isset($erreur))
{
    echo '<font color= "red">'.$erreur."</font>";
}
?>