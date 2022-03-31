<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>bonjour impots ^^</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css">
        <script src="main.js"></script>
    </head>

    <body>
        <form method="post">
            <input type="text" name="nom">
            <input type="test" name="argent">
            <input type="submit" name="form_submitted">
        </form>

        <?php
            spl_autoload_register(function ($class){
                include $class.'.php';
            });
            //include "Impot.php";
            
            if (isset($_POST['form_submitted'])){
                $mec = htmlspecialchars($_POST['nom']);
                $thune = htmlspecialchars($_POST['argent']);

                $objImpot = new Impot($thune, $mec);
                $imPoPay=$objImpot->CalculImpot();
                //echo "test :".$imPoPay." €";
                $objImpot->ToString($imPoPay);
            }
        ?>
    </body>
</html>