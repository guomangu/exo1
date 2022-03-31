<?php
    include "../model/base.php";
    $objresto=new MyTable("restaurant");
    $objresto->suprLigne($_POST["suppr"]);
    // $objresto2=new MyTable("restaurant");
    // echo $objresto2->rendreHTML();

?>