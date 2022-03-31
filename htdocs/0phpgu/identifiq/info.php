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

    <body>
        <form method="post">
            <input type="submit" name="form_submitted">
        </form>

        <?php
            include "Compte.php";
            session_start();

            //var_dump($_SESSION);
            

            if (isset($_POST['form_submitted'])){
                session_start();
                $obj=$_SESSION["obj"];
                $obj->deco();
                //echo "test :".$imPoPay." €";
                //$objImpot->ToString($imPoPay);
            }

            $obj=$_SESSION["obj"];
            $bool=password_verify($obj->getPass(),$_SESSION["hash"]);
            echo "le pass est ".$bool;

            if ($_SESSION['co']==true) {
                for ($i=0; $i < 10; $i++) { 
                    echo"<br>bienvenue sur l'actu ".$i."<br>";
                }
            }
        ?>
    </body>
</html>