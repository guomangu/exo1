<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css.css">

    <title>GUIDE RESTO</title>

    <style>
      input[type='text'] { margin:15px 20px; background-color:#E6E6E6;  }
      input[type='password'] { margin:15px 20px; background-color:#E6E6E6;  }
      label { margin-left:10px;margin-right:10px}
      fieldset {margin-top:50px; width:15%; margin-left:auto; margin-right:auto;}
      #btnsub { width:100%;text-align:center}
    </style>
  </head>

    <?php

        // include "connect.php";
        // $pass=password_hash("Tournedisque",CRYPT_BLOWFISH);
        // $sql="INSERT INTO utilisateurs (`lastname_user`, `firstname_user`, `mail_user`,'pass_user','level') 
        // VALUES ('Tournesol','Tryphon','t.tournesol@gmail.com',".$pass.",1) ;";
        // $stat=$co->prepare($sql);
        // var_dump($sql);

        // // $pass=password_hash("Rossignol",CRYPT_BLOWFISH);
        // // $stat->bindParam(":nom",'Castafiore',PDO::PARAM_STR);
        // // $stat->bindParam(":prenom",'Bianca',PDO::PARAM_STR);
        // // $stat->bindParam(":mail",'bcastafiore@gmail.com',PDO::PARAM_STR);
        // // $stat->bindParam(":pass",$pass,PDO::PARAM_STR);
        // // $stat->bindParam(":level",2,PDO::PARAM_INT);

        // $stat->execute();

    ?>

    <?php
    if (isset($_SESSION)) {
        
    }else {
        session_start();   
    }
    ?>
  
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
            include "connect.php";

            if (isset($_POST["go"])) {
                $mail=$_POST["uno"];
                $pass=$_POST["dos"];
                if (!empty($mail) && !empty($pass) ) {

                    $sql="SELECT pass_user FROM utilisateurs where mail_user='".$mail."' ;";
                    $stat=$co->prepare($sql);

                    // $stat->bindParam(":id",$mail,PDO::PARAM_STR);
                    // $stat->bindParam(":pass",$pass,PDO::PARAM_STR);
                    
                    // var_dump($stat);
                    $stat->execute();
                    $hash=$stat->fetch();
                    // var_dump($hash);
                    if (password_verify( $pass,$hash[0])==1) {
                    //  session_start();
                        $_SESSION["un"]="co";
                    }else {
                        $_SESSION["un"]="deco"; 
                    }
                    // var_dump($_SESSION["un"]);
                }
            }
        ?>


<?php
        if (isset($_POST["gadjeto"])) {
            $_SESSION["un"]="deco";
        }

        if ($_SESSION["un"]!="co") {
            echo'<main>
                <form method="post" action="index.php">
                    <label for="uno">Mail</label>
                    <input type="text" value="b.castafiore@gmail.com" name="uno" id="uno">
                    <label for="dos">Pass</label>
                    <input type="password" value="Rossignol" name="dos" id="dos">
                    <input type="submit" value="CONNEXION" name="go">
                </form>
            </main>';
        }else if ($_SESSION["un"]=="co") {
            echo'<main>
                <form method="post" action="index.php">
                    <input type="submit" value="DECONNEXION" name="gadjeto">
                    <a href=\'liste.php\'> liste </a>
                </form>
            </main>';
        }
        
        
        ?>
    </body>
</html>