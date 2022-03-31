<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="Astrologie">
    <meta name="Keywords" content="Astrologie, horoscope">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="c.png" type="image/x-icon">
    <title>Astro</title> 
</head>

<body onload="loadMonCompte()">
    <?php 
        include("header.php");
    ?>
     <?php 
        include("barrnav.php");
    ?>
     <?php 
        include("logo.php");
    ?>

    <section class="main">

        <h2 id="titleCompte">Bienvenue sur votre compte</h2>

        <div id="formulaire">

            <div class="quest1"> 
                <p>Prénom</p>
                <p>Nom</p>
                <p>Ville de naissance</p>
                <p>Date de naissance</p>
                <p>Pseudo</p>
                <p>Numéro de télephone</p>
                <p>Nombre de jour(s) avant votre anniversaire</p>
            </div>

            <div class="input2">

                <p><div class="reponse" id="firstname">N/A</div></p>
                <p><div class="reponse" id="surname">N/A</div></p>
                <p><div class="reponse" id="ville">N/A</div></p>
                <p><div class="reponse" id="datenaissance">N/A</div></p>
                <p><div class="reponse" id="pseudo">N/A</div></p>
                <p><div class="reponse" id="telp">N/A</div></p>
                <p><div class="reponse" id="anniversaire">N/A</div></p>
            </div>

            <input type="button" id="disconnect" value="Déconnexion" onclick="disconnect()">
            <input type="button" id="register" value="S'inscrire" onclick="insc()">
        </div>
            
    </section>

    <?php 
        include("aside.php");
    ?>

    <?php 
        include("footer.php");
    ?>

    <script src="script.js"></script>

</body>

</html>