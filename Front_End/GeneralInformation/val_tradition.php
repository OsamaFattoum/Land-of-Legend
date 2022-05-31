  <!-- start heading Values & Tradition -->
  <div class="landing d-flex justify-content-center align-items-center" style="background-image: url('Front_End/Layout/images/val_tradition.jpg') !important ;">
       <div class="text-center box-head">
           <h1 class="landing_head-text"><?php echo $landing_values_head_text ?></h1>
       </div>
       <!-- Get dropdown of languages -->
       <?php include_once './Front_End/Template/includes/dropdown_lang.php'; ?>
   </div>
   <!-- end  heading Values & Tradition   -->


   <?php if (isset($_GET['page']) && isset($_GET['sub_page']) && $_GET['page'] == 'val_tradition' && $_GET['sub_page'] == 'feasting') {
        include_once 'subValuesTradition/feasting.php';
    } elseif (isset($_GET['page']) && isset($_GET['sub_page']) && $_GET['page'] == 'val_tradition' && $_GET['sub_page'] == 'local_custom') {
        include_once 'subValuesTradition/localCustom.php';
    } elseif (isset($_GET['page']) && isset($_GET['sub_page']) && $_GET['page'] == 'val_tradition' && $_GET['sub_page'] == 'religion') {
        include_once 'subValuesTradition/religion.php';
    } elseif (isset($_GET['page']) && isset($_GET['sub_page']) && $_GET['page'] == 'val_tradition' && $_GET['sub_page'] == 'ramdan') {
        include_once 'subValuesTradition/ramdan.php';
    } else {
        include_once 'subValuesTradition/index.php';
    } ?>