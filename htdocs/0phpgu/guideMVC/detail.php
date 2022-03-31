<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .wrapper {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
        }

        .one {
            grid-column-start:2;
            grid-column-end:3;
            border-radius: 10px;
        }

        .hello{
            text-shadow: 0px 0px 7px rgba(255, 255, 255, 1),0px 0px 7px rgba(255, 255, 255, 1),0px 0px 7px rgba(255, 255, 255, 1),0px 0px 7px rgba(255, 255, 255, 1);
        }
    </style>
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
        session_start();
        include "../model/base.php";
        $objresto=new MyTable("restaurant");
        //var_dump($_POST["modif"]);

        $oui=(int)$_POST["modif"];
        if (isset($_POST["modif"])) {
            $_SESSION["oui"]=$oui;
        }

        $info=$objresto->afficherligne($oui);
        //$info=$objresto->afficherligne(1);

        //var_dump($info);
        //var_dump($info[$_GET["lol"]-1][0]);
        echo('
            <form method="post" class="wrapper">
                <div class="tenor-gif-embed one" data-postid="4684338" data-share-method="host" data-aspect-ratio="0.984" data-width="100%"><a href="https://tenor.com/view/kawaii-anime-gif-4684338">Kawaii Anime GIF</a>from <a href="https://tenor.com/search/kawaii-gifs">Kawaii GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>

                <label class="one hello" for="uno">uno</label>
                <input class="one" type="text" name="uno" value="'.$info[1].'">
                
                <label class="one hello" for="dos">dos</label>
                <input class="one" type="text" name="dos" value="'.$info[2].'">
                
                <label class="one hello" for="tres">tres</label>
                <input class="one" type="text" name="tres" value="'.$info[3].'">
                
                <label class="one hello" for="quatro">quatro</label>
                <input class="one" type="text" name="quatro" value="'.$info[4].'">

                <label class="one hello" for="cinco">cinco</label>
                <input class="one" type="text" name="cinco" value="'.$info[5].'">

                <label class="one hello" for="seis">seis</label>
                <input class="one" type="text" name="seis" value="'.$info[6].'">
                
                <input class="one" type="submit" name="siete">
                <div class="tenor-gif-embed one" data-postid="16461488" data-share-method="host" data-aspect-ratio="0.971875" data-width="100%"><a href="https://tenor.com/view/anime-suit-girl-cute-angry-gif-16461488">Anime Suit GIF</a>from <a href="https://tenor.com/search/anime-gifs">Anime GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
            </form>
        ');

        
        $objresto=new MyTable("restaurant");

        if (isset($_POST["siete"])) {
            $data=[$_POST["uno"], $_POST["dos"], $_POST["tres"], $_POST["quatro"], $_POST["cinco"], $_POST["seis"]];
            //var_dump($_SESSION["oui"]);
            $objresto->modifierOccurence($_SESSION["oui"],$data);
            header("Location: ../view/carcasse.php");
        }
        //$data=["la tavola","1 rue des mimosax Aix-en-Provence 13100", 50, "Restaurant Fabulous, addition sulfureuse", 9.9, "2021-08-15"];
    ?>
</body>
</html>