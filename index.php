<?php

$title = "The Land of Legends &";
$basename = 'Home';
$msg = ''; 
$msg2 = '';

include_once "Front_End/Template/includes/header_includes.php";

if (isset($_GET['page']) && $_GET['page'] == 'get_around') {
    /************** Start Getting Around ***************/
    include_once "Front_End/GeneralInformation/getAround.php";
    echo '<script src="Front_End/Layout/js/get_around.js"></script>';
    /************** End Getting Around ***************/
}elseif(isset($_GET['page']) && $_GET['page'] == 'just_facts'){ 
     /************** Start Just Facts ***************/
     include_once "Front_End/GeneralInformation/justFacts.php";
     /************** End  Just Facts ***************/
}elseif(isset($_GET['page']) && $_GET['page'] == 'val_tradition'){ 
    /************** Start Values & Traditions ***************/
    include_once "Front_End/GeneralInformation/val_tradition.php";
    /************** End  Values & Traditions ***************/
}else {

    if (isset($_GET['expriances'])) {

        if(isset($_GET['show'])){
        
            /************** Start Expriances Show  ***************/
            include_once "Front_End/Experiances/show.php";
            /************** End Expriances Show ***************/

        }else{
            /************** Start Expriances Main  ***************/
            include_once "Front_End/Experiances/index.php";
            /************** End Expriances Main ***************/
        }

    }elseif(isset($_GET['attraction'])){

        if(isset($_GET['show'])){
        
            /************** Start Attraction Show  ***************/
            include_once "Front_End/Attractions/show.php";
            echo '<script src="Front_End/Layout/js/city.js"></script>';
            /************** End Attraction Show ***************/

        }else{
            /************** Start Attraction Main  ***************/
            include_once "Front_End/Attractions/index.php";
            /************** End Attraction Main ***************/
        }
    }elseif(isset($_GET['news'])){

        /************** Start News   ***************/
        include_once "Front_End/Media/news.php";
        /************** End News  ***************/

    }elseif(isset($_GET['contact'])){

        /************** Start Contact   ***************/
        include_once "Front_End/Media/contact.php";
        /************** End Contact  ***************/

    }elseif(isset($_GET['booking'])){

        if(isset($_GET['register'])){

            /************** Start register   ***************/
            include_once "Front_End/Booking/register.php";
            /************** End register  ***************/
            echo '<script src="Front_End/Layout/js/register.js"></script>';
        }elseif(isset($_GET['logout'])){

             /************** Start logout   ***************/
             include_once "Front_End/Booking/logout.php";
             /************** End logout  ***************/
        }else{
            /************** Start Booking   ***************/
            include_once "Front_End/Booking/index.php";
            /************** End Booking  ***************/
        }

    }else{

        /************** Start About Jordan ***************/
        include_once "Front_End/GeneralInformation/index.php";
        /************** End About Jordan ***************/
    }



}  ?>

<script src="Front_End/Layout/js/home.js"></script>

<?php

include_once "Front_End/Template/includes/footer_includes.php";

?>