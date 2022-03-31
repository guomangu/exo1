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

<body onload="loadIndex()">
   
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

        <section class="articles">

            <section id="article1" class="article">
                <img src="sun.png" alt="sun" id="sun">
                <h3>Votre horoscope du jour</h3>
                <input type="button" value="Lire la suite" class="suite">
            </section>

            <section id="article2" class="article">
                <img src="moon.png" alt="moon" id="moon">
                <h3>Horoscope de la pleine-lune</h3>
                <input type="button" value="Lire la suite" class="suite">
            </section>

            <section id="article3" class="article">
                <img src="2020.png" alt="2020" id="_2020">
                <h3>Votre horoscope 2020</h3>
                <input type="button" value="Lire la suite" class="suite">
            </section>

            <section id="article4" class="article">
                <img src="saturn.png" alt="saturn" id="saturn"><h2>Votre horoscope et coaching personnalisé</h2>
                <p>Véritable prouesse à la croisée entre la l'astrologie et la technologie, votre horoscope personnalisé vous donne la position de votre ciel actuel et ses intérpretations, en temps réel.</p>
                <input type="button" value="Lire la suite" class="suite1">
            </section>

            <section id="article5" class="article">
                <img src="balance.png" alt="balance" id="balance">
                <h2>L'ascendant de votre thème Astral</h2>
                <p>Votre ascendant est très important en astrologie. Il définit la manière dont les autres vous perçoivent, ce qui peut être différent de votre « moi ». N'hésitez pas à en apprendre plus sur le sujet.</p>
                <input type="button" value="Lire la suite" class="suite2">
            </section>

        </section>

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