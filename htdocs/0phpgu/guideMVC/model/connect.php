<?php
    try {
        $co=new PDO('mysql:host=localhost;dbname=guide','root','',
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_NUM
            )
            );
    } catch (PDOException $e) {
        echo "error bdd ".$e->getMessage();
    }
?>