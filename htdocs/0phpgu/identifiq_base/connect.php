<?php

    try 
    {	
        $bdd = new PDO('mysql:host=localhost;dbname=idetifiq', 'root', '');
    } 
    catch ( Exception $e ) 
    {
        die('Erreur : '. $e->getMessage());
    }

    
    /*
    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "Cdi1234";
        $db = "idetifiq";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        
        return $conn;
    }
    
    function CloseCon($conn)
    {
        $conn -> close();
    }
    */
?>