<?php
    if (!empty($_GET['classe']) && !empty($_GET['action']) && !empty($_GET['id'])  ) 
    {
        $classe=$_GET['classe'];
        $monObj=new $classe("restaurant");
        $action=$_GET['action'];
        

        if($_GET['action'] == "afficherligne")
        {
            $data=$monObj->$action($_GET['id']);
            require("view/layoutdetail.php");
        }
        else if ($_GET['action'] == "afficherlisting")
        {
            $tete=$monObj->infotable();
            $data=$monObj->$action();
            //require("view/layoutlisting0.php");
            require("view/layoutlisting.php");
        }
        else if ($_GET['action'] == "modifier")
        {

        }
        else if ($_GET['action'] == "ajouter")
        {

        }
        else if ($_GET['action'] == "supprimer")
        {

        }
        else 
        {
            echo 'yarien non plus';
        }
    }
    else 
    {
        echo'yarien';
    }
?>