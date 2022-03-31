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

<body onload="loadInscription()">
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
        <h2 id="h2Inscription">Inscrivez vous ici !</h2>

        <form id="regForm" action="MonCompte.html">
            

            <input type="text" placeholder="Prénom" id="prenomBox" required><br>
            <input type="text" placeholder="Nom" id="nomBox" required><br>
            <input type="text" placeholder="Ville de naissance" id="villeBox" required><br>

            <fieldset id="field">
                <legend>Date de naissance</legend>
                <select name="Jour" id="jour" required></select>
                <select name="Mois" id="mois" required></select>
                <select name="Année" id="annee" required></select>
            </fieldset>
            <br>
            
            <input type="text" id="pseudoBox" placeholder="Pseudo" readonly>
            <input type="button" id="generer" value="Générer"><br>
            <input type="password" id="mdpBox" placeholder="Mot de passe" ><br>
            <input type="tel" id="telBox" placeholder="Numero de téléphone" required><br>
            <textarea name="Message" id="messageBox" cols="30" rows="2" placeholder="Message (Facultatif)"></textarea>
            <br>
            <div id="btn">
                <input type="submit" value="Valider" id="validBTN"> 
                <input type="reset" value="Reset" id="resetBTN">  
            </div>
        </form>
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