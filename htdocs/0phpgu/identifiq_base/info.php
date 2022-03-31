<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>orvoar id ^^</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css">
        <script src="main.js"></script>
    </head>

    <?php session_start(); ?>
    <body>
        <form method="post">
            <h1>Connecter compte</h1>
            <input type="text" name="id" value="<?php echo($_SESSION['nom']); ?>">
            <input type="text" name="pass">
            <input type="submit" name="form_submitted">
        </form>

        <?php
            include "Compte.php";
            
            if (isset($_POST['form_submitted'])){
                $id = htmlspecialchars($_POST['id']);
                $pass = htmlspecialchars($_POST['pass']);

                $_SESSION["co"]=false;
                $objco = new Compte($id, $pass);
                if($objco->identification()){
                    $_SESSION["co"]=true;
                }

                if ($_SESSION["co"]) {
                    for ($i=0; $i < 10; $i++) { 
                        echo"<br>bienvenue sur l'actu ".$i."<br>";
                    }
                }
            }
        ?>
    </body>
</html>