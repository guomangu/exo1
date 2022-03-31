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
            <input type="text" value="GuillaumE" name="nom1">
            <input type="submit" name="form_submitted">
        </form>

        <?php
            include "MyString.php";

            if (isset($_POST['form_submitted'])){
                $nom1 = htmlspecialchars($_POST['nom1']);
                //var_dump($nom1);


                echo"<br><br>";
                $obj1 = new MyString($nom1);
                echo($obj1->lenght()."<br>");

                $obj2 = new MyString($nom1);
                echo($obj2->charAt(5,1)."<br>");

                $obj3 = new MyString($nom1);
                echo($obj3->indexOf("ll",0)."<br>");

                $obj4 = new MyString($nom1);
                echo($obj4->charAt(3,2)."<br>");

                $obj5 = new MyString($nom1);
                $lol5=$obj5->split(1);
                foreach ($lol5 as $key => $value) {
                    echo($value." ");
                }
                echo("<br>");

                $obj6 = new MyString($nom1);
                echo($obj6->toLowerCase()."<br>");

                $obj7 = new MyString($nom1);
                echo($obj7->toUpperCase()."<br>");
            }
        ?>
    </body>
</html>