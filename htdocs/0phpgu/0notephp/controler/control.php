<?php
    if (!empty($_GET['classe']) && !empty($_GET['action']) && !empty($_GET['id'])) 
    {
        $classe=$_GET['classe'];
        $monObj=new $classe();
     // $monObj=new $classe("attr");

        $action=$_GET['action'];
        $id=$_GET['id'];
        
        if($action == "afficherligne")
        {
            $data=$monObj->$action;
            require("view/layoutdetail.php");
        }
        else if ($action == "afficherlisting")
        {
            $tete=$monObj->infotable();
            $data=$monObj->$action();
            require("view/layoutlisting.php");
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