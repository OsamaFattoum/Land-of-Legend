<?php

$title = "The Land of Legends &";
$basename = 'Home';

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
    /************** Start About Jordan ***************/
    include_once "Front_End/GeneralInformation/index.php";
    /************** End About Jordan ***************/
} ?>

<script src="Front_End/Layout/js/home.js"></script>

<?php

include_once "Front_End/Template/includes/footer_includes.php";

?>