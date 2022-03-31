<?php
    $name = (isset($_POST['name'])) ? $_POST['name'] : 'anonyme';
    $array = ['name' => $name];
    echo json_encode($array);
?>

