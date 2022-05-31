  <!-- Start Header Of facts (visas) -->
  <div class="head-section">
        <div class="container">
            <div class="link-previous text-dark d-flex justify-content-center align-items-center ">
                <a href="/"><?php echo strtoupper($home); ?></a> <i class="fa fa-arrow-<?php echo $dir2;?> mx-2" aria-hidden="true"></i> <a href="?page=just_facts"><?php echo strtoupper($get_facts); ?></a> <i class="fa fa-arrow-<?php echo $dir2;?> mx-2" aria-hidden="true"></i> <a href="?page=just_facts&sub_page=visas"><?php echo strtoupper($head_visas); ?></a>
            </div>
            <div class="head d-flex justify-content-start align-items-center mt-5">
                <h1 class="pt-2 pb-1"><?php echo strtoupper($head_visas); ?></h1>
            </div>
        </div>
    </div>

    <!-- End Header Of  facts  (visas) -->



<div class="content-list py-5">
    <div class="container">
        <div class="info my-5">
            <?php include_once './Front_End/Template/includes/tabels/visasTable.php'; ?>
        </div>
    </div>
</div>