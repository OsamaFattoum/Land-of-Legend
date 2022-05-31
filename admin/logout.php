<?php

session_start();
if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_id"])){
    session_unset();
    session_destroy();
    
    header("location:Login.php");
    exit();

}else{
    
    header("location:Login.php");
    exit();
}



?>