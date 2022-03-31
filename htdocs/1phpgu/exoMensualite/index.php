<!doctype html>
<html lang="Fr">

<head>
    <meta charset="utf-8">
    <title>Entrainement Centre de Readaptation</title>
    <link rel="stylesheet" media="screen" href="css.css">
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

    <form class="form" enctype='multipart/form-data' method="POST">
        <label for="cap">capitalel emprunter</label>
        <input class="cap" type="text" name="cap" value="<?php if(isset($_POST["sub"])){echo($_POST["cap"]);}else{echo("");} ?>">

        <label for="tau">taux %</label>
        <input class="tau" type="text" name="tau" value="<?php if(isset($_POST["sub"])){echo($_POST["tau"]);}else{echo("");} ?>">

        <label for="dur">duree remb annee</label>
        <input class="dur" type="text" name="dur" value="<?php if(isset($_POST["sub"])){echo($_POST["dur"]);}else{echo("");} ?>">

        <div class="men1">
            <input name="sub" type="submit" value="valider">
            <label for="men">mensualité : </label>
        </div>
        <input type="text" class="men2" name="men" value="
        <?php
        if (isset($_POST["sub"])) {
            // echo("test");
            spl_autoload_register(function($class) {include  $class.".php";} );
            $monObj=new Financier($_POST["cap"],$_POST["tau"],$_POST["dur"]);
            $mensualite=$monObj->calculMensualite();
            // var_dump($monObj);
            echo $mensualite;
        }
        ?>
        " readonly>
    
        <div class="tab">
            <label for="tab">tableau de remboursement</label>
            <div name="tab">
                <?php if(isset($_POST["sub"])){$mensualite=$monObj->genererTableau();} ?>
            </div>
        <div>


    </form>
</body>
</html>




<?php


?>