<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>bonjour id ^^</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css">
        <script src="main.js"></script>
    </head>

    <body>
        <form method="post">
            <input type="text" name="id">
            <input type="text" name="pass">
            <input type="submit" name="form_submitted">
        </form>

        <?php
            include "Compte.php";

            if (isset($_POST['form_submitted'])){
                $id = htmlspecialchars($_POST['id']);
                $pass = htmlspecialchars($_POST['pass']);

                $hashed_password = password_hash($pass, PASSWORD_BCRYPT);
                session_start();
                $_SESSION["hash"]=$hashed_password;

                $objco = new Compte($id, $pass);
                $objco->identification();
                session_start();
                $_SESSION["obj"]=$objco;
                //echo "test :".$imPoPay." €";
                //$objImpot->ToString($imPoPay);
            }
        ?>
    </body>
</html>