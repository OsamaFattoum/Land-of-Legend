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
        
        }elseif(isset($_GET['page']) && $_GET['page'] == 'news'){
            /*********** News Pages ************/
            if(isset($_GET['edit'])){
                include_once 'pages/news/edit.php';
            }elseif(isset($_GET['delete'])){
                include_once 'pages/news/delete.php';
            }elseif(isset($_GET['add'])){
                include_once 'pages/news/add.php';
            }else{
                include_once 'pages/news/index.php';
            }
        }elseif(isset($_GET['page']) && $_GET['page'] == 'hotels'){
            /*********** Hotels Pages ************/
            if(isset($_GET['edit'])){
                include_once 'pages/hotels/edit.php';
            }elseif(isset($_GET['delete'])){
                include_once 'pages/hotels/delete.php';
            }elseif(isset($_GET['add'])){
                include_once 'pages/hotels/add.php';
            }else{
                /*********** Hotels Reservation Pages ************/
                if(isset($_GET['res'])){
                    include_once 'pages/hotels/resHotels/index.php';
                }elseif(isset($_GET['edit_res'])){
                    include_once 'pages/hotels/resHotels/edit.php';
                }elseif(isset($_GET['delete_res'])){
                    include_once 'pages/hotels/resHotels/delete.php';
                }elseif(isset($_GET['add_res'])){
                    include_once 'pages/hotels/resHotels/add.php';
                }else{
                    include_once 'pages/hotels/index.php';
                }
            }
        }elseif(isset($_GET['page']) && $_GET['page'] == 'airlines'){
            /*********** Airlines Pages ************/
            if(isset($_GET['edit'])){
                include_once 'pages/airlines/edit.php';
            }elseif(isset($_GET['delete'])){
                include_once 'pages/airlines/delete.php';
            }elseif(isset($_GET['add'])){
                include_once 'pages/airlines/add.php';
            }else{
                /*********** Airlines Reservation Pages ************/
                if(isset($_GET['res'])){
                    include_once 'pages/airlines/resAirlines/index.php';
                }elseif(isset($_GET['edit_res'])){
                    include_once 'pages/airlines/resAirlines/edit.php';
                }elseif(isset($_GET['delete_res'])){
                    include_once 'pages/airlines/resAirlines/delete.php';
                }elseif(isset($_GET['add_res'])){
                    include_once 'pages/airlines/resAirlines/add.php';
                }else{
                    include_once 'pages/airlines/index.php';
                }
            }
        }elseif(isset($_GET['page']) && $_GET['page'] == 'cities'){

            /*********** Cities Pages ************/
            if(isset($_GET['edit'])){
                include_once 'pages/cities/edit.php';
            }elseif(isset($_GET['delete'])){
                include_once 'pages/cities/delete.php';
            }elseif(isset($_GET['add'])){
                include_once 'pages/cities/add.php';
            }else{
                include_once 'pages/cities/index.php';
            }

        }elseif(isset($_GET['page']) && $_GET['page'] == 'content'){

            /*********** Content City Pages ************/
            if(isset($_GET['edit'])){
                include_once 'pages/content/edit.php';
            }elseif(isset($_GET['delete'])){
                include_once 'pages/content/delete.php';
            }elseif(isset($_GET['add'])){
                include_once 'pages/content/add.php';
            }else{
                include_once 'pages/content/index.php';
            }

        }elseif(isset($_GET['page']) && $_GET['page'] == 'categories'){

            /*********** Categories Pages ************/
            if(isset($_GET['edit'])){
                include_once 'pages/categories/edit.php';
            }elseif(isset($_GET['delete'])){
                include_once 'pages/categories/delete.php';
            }elseif(isset($_GET['add'])){
                include_once 'pages/categories/add.php';
            }else{
                include_once 'pages/categories/index.php';
            }

        }elseif(isset($_GET['page']) && $_GET['page'] == 'countries'){

            /*********** Countries Pages ************/
            if(isset($_GET['edit'])){
                include_once 'pages/countries/edit.php';
            }elseif(isset($_GET['delete'])){
                include_once 'pages/countries/delete.php';
            }elseif(isset($_GET['add'])){
                include_once 'pages/countries/add.php';
            }else{
                include_once 'pages/countries/index.php';
            }

        }elseif(isset($_GET['page']) && $_GET['page'] == 'tickets'){

            /*********** Tickets Pages ************/
            if(isset($_GET['edit'])){
                include_once 'pages/tickets/edit.php';
            }elseif(isset($_GET['delete'])){
                include_once 'pages/tickets/delete.php';
            }elseif(isset($_GET['add'])){
                include_once 'pages/tickets/add.php';
            }else{
                include_once 'pages/tickets/index.php';
            }

        }elseif(isset($_GET['page']) && $_GET['page'] == 'maps'){

            /*********** Maps Pages ************/
            if(isset($_GET['edit'])){
                include_once 'pages/maps/edit.php';
            }elseif(isset($_GET['delete'])){
                include_once 'pages/maps/delete.php';
            }elseif(isset($_GET['add'])){
                include_once 'pages/maps/add.php';
            }else{
                include_once 'pages/maps/index.php';
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
