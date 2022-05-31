  <!-- Start Header Of facts (Airport) -->
  <div class="head-section">
        <div class="container">
            <div class="link-previous text-dark d-flex justify-content-center align-items-center ">
                <a href="/"><?php echo strtoupper($home); ?></a> <i class="fa fa-arrow-<?php echo $dir2;?> mx-2" aria-hidden="true"></i> <a href="?page=just_facts"><?php echo strtoupper($get_facts); ?></a> <i class="fa fa-arrow-<?php echo $dir2;?> mx-2" aria-hidden="true"></i> <a href="?page=just_facts&sub_page=cross"><?php echo strtoupper($head_airport); ?></a>
            </div>
            <div class="head d-flex justify-content-start align-items-center mt-5">
                <h1 class="pt-2 pb-1"><?php echo strtoupper($head_airport); ?></h1>
            </div>
            <p class="fs-6"><?php echo $parag_airport ?></p>
        </div>
    </div>

    
    <!-- End Header Of  facts  (Airport) -->


    <div class="content-list py-5">
    <div class="container">
        <div class="info my-5">
            <h4 class="opacity-75"><?php echo $head_airport_1?></h4>
            <p class="opacity-50"><?php echo $parag_airport_1?></p>
        </div>
        <div class="info my-5">
            <h4 class="opacity-75"><?php echo $head_airport_2?></h4>
            <p class="opacity-50"><?php echo $parag_airport_2?></p>
        </div>
        <div class="info my-5">
            <h4 class="opacity-75"><?php echo $head_airport_3?></h4>
            <p class="opacity-50"><?php echo $parag_airport_3?></p>
        </div>
    </div>
</div>