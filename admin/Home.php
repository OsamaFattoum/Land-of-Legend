<?php

$title = "Dashboard";
$basename = 'Home';
$msg = '';
$navbar = '';

include_once "Template/includes/header_includes.php";

if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_id"])){

/**** Includes Sidebar */
include_once 'Template/includes/sidebar.php';
?>

<div class="container-lg  mt-5">
    
<?php
/*********************** Start Pages ************************ */ 
if(isset($_GET['page']) && $_GET['page'] == 'users'){
    
    /*********** Users Pages ************/
    if(isset($_GET['edit'])){
        include_once 'pages/users/edit.php';
    }elseif(isset($_GET['delete'])){
        include_once 'pages/users/delete.php';
    }elseif(isset($_GET['add'])){
        include_once 'pages/users/add.php';
    }else{
        include_once 'pages/users/index.php';
    }
  
}else{
    /*********** Dashboard Page ************/
    include_once 'pages/index.php';
}

/*********************** End Pages ************************ */ 
?>

</div>

<?php

}else{ header("location:login.php"); exit();}

include_once "Template/includes/footer_includes.php";

?>
