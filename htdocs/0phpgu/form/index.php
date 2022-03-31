<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>bonjour form ^^</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css">
        <script src="main.js"></script>
    </head>

    <body>
        <form method="post">
            <input type="text" value="GuillaumE" name="uno">
            <input type="text" value="AnguenoT" name="dos">
            <input type="number" value=23 name="tres">

            <input type="submit" name="form_submitted">
        </form>

        <?php
            include "FormValidation.php";

            if (isset($_POST['form_submitted'])){
              
                $champs_requis = array(  
                    "uno" => "string",  
                    "dos" => "string",
                    "tres" => "integer"
                );

                $form = new FormValidation($champs_requis);
                if($form->isFilled() && $form->isValid()){
                    echo"BonForm"; 
                } else {
                    echo"MauvaisForm"; 
                }
            }
        ?>
    </body>
</html>