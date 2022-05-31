   <!-- start heading getting around -->
   <div class="landing d-flex justify-content-center align-items-center" style="background-image: url('Front_End/Layout/images/getting_around.jpg') !important ;">
       <div class="text-center box-head">
           <h1 class="landing_head-text"><?php echo $landing_getting_head_text ?></h1>
       </div>
       <!-- Get dropdown of languages -->
       <?php include_once './Front_End/Template/includes/dropdown_lang.php'; ?>
   </div>
   <!-- end  heading getting around  -->

   <?php if (isset($_GET['page']) && isset($_GET['sub_page']) && $_GET['page'] == 'get_around' && $_GET['sub_page'] == 'ground_transport') {
        include_once 'subAboutJordan/groundtransport.php';
    } elseif (isset($_GET['page']) && isset($_GET['sub_page']) && $_GET['page'] == 'get_around' && $_GET['sub_page'] == 'rail_road') {
        include_once 'subAboutJordan/railroad.php';
    } elseif (isset($_GET['page']) && isset($_GET['sub_page']) && $_GET['page'] == 'get_around' && $_GET['sub_page'] == 'air_line') {
        include_once 'subAboutJordan/airline.php';
    } else {
        include_once 'subAboutJordan/index.php';
    } ?>