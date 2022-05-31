   <!-- start heading Just Fact -->
   <div class="landing d-flex justify-content-center align-items-center" style="background-image: url('Front_End/Layout/images/just_facts.png') !important ;">
       <div class="text-center box-head">
           <h1 class="landing_head-text"><?php echo $landing_facts_head_text ?></h1>
       </div>
       <!-- Get dropdown of languages -->
       <?php include_once './Front_End/Template/includes/dropdown_lang.php'; ?>
   </div>
   <!-- end  heading Just Fact  -->


   <?php if (isset($_GET['page']) && isset($_GET['sub_page']) && $_GET['page'] == 'just_facts' && $_GET['sub_page'] == 'fees') {
        include_once 'subJustFacts/fees.php';
    } elseif (isset($_GET['page']) && isset($_GET['sub_page']) && $_GET['page'] == 'just_facts' && $_GET['sub_page'] == 'visas') {
        include_once 'subJustFacts/visas.php';
    } elseif (isset($_GET['page']) && isset($_GET['sub_page']) && $_GET['page'] == 'just_facts' && $_GET['sub_page'] == 'cross') {
        include_once 'subJustFacts/borderCross.php';
    } elseif (isset($_GET['page']) && isset($_GET['sub_page']) && $_GET['page'] == 'just_facts' && $_GET['sub_page'] == 'embassies') {
        include_once 'subJustFacts/embassies.php';
    } elseif (isset($_GET['page']) && isset($_GET['sub_page']) && $_GET['page'] == 'just_facts' && $_GET['sub_page'] == 'ports') {
        include_once 'subJustFacts/ports.php';
    } elseif (isset($_GET['page']) && isset($_GET['sub_page']) && $_GET['page'] == 'just_facts' && $_GET['sub_page'] == 'airport') {
        include_once 'subJustFacts/airport.php';
    } else {
        include_once 'subJustFacts/index.php';
    } ?>