<!-- Start Header Of just facts   (fees) -->
<div class="head-fees position-relative p-5">
    <div class="container sub-head d-flex flex-column border- justify-content-center align-items-center">
        <div class="link-previous text-dark ">
            <a href="/"><?php echo strtoupper($home); ?></a> <i class="fa fa-arrow-<?php echo $dir2;?> mx-2" aria-hidden="true"></i> <a href="?page=just_facts"><?php echo strtoupper($get_facts); ?></a> <i class="fa fa-arrow-<?php echo $dir2;?> mx-2" aria-hidden="true"></i> <a href="?page=just_facts&sub_page=fees"><?php echo strtoupper($head_main_fees); ?></a>
        </div>
    </div>
</div>
<!-- End Header Of just facts   (fees) -->

<div class="content-list py-5">
    <div class="container">
        <div class="info my-5">
            <h2 class="opacity-75 mb-5"><?php echo $head_main_fees?></h2>
            <?php include_once './Front_End/Template/includes/tabels/mainFeesTable.php'; ?>
        </div>
        <div class="info my-5">
            <h2 class="opacity-75 mb-5"><?php echo $head_natural_fees?></h2>
            <?php include_once './Front_End/Template/includes/tabels/naturalFeesTable.php'; ?>
        </div>
    </div>
</div>