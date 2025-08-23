<?php

session_start();
if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_id"])){
    
    $_SESSION['admin_name'] = null;
    $_SESSION['admin_id'] = null;
    
    header("location:Login.php");
    exit();

}else{
    
    header("location:Login.php");
    exit();
}



?>