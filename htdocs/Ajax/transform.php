<?php

    $rep = array('name' => '');

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $rep['name'] = strtoupper($_POST["name"]);
        echo json_encode($rep);
    }
?>