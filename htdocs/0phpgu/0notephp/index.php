<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="hello je suis la pour le referencement">
        <link rel="shortcut icon" href="img/favicon.ico">

        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="http://fonts.googleapis.com/css?family=satisfy+regular" rel="steelsheet" type="text/css">
        <title>Le vigneron</title>
    </head>

    <body>
        <video style="
            position: fixed; right: 0; bottom: 0;
            min-width: 100%; min-height: 100%;
            width: auto; height: auto; z-index: -100;
            background: url() no-repeat;
            background-size: cover;"
            autoplay muted loop>
            <source src="videoAccueil.mp4" type="video/mp4" />
        </video>


        <?php
            include "model/connect.php";
            include "model/class.php";
            include "controler/control.php";
        ?>
    </body>
</html>