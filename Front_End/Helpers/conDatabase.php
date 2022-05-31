<?php


    $serverHost = "localhost";
    $userName = "root";
    $password = "";
    try{
    $con = new PDO("mysql:host=$serverHost;dbname=land_of_legend",$userName,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo "Your Connect Faild " . $e->getMessage();
    }
    


?>