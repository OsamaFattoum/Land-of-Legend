<?php

 /****** Query Get Cities Form Database  ****** */
 $cities = DataBaseQuery::selectQuery('*','cities');


?>


<!-- start heading Attractions -->
    <div class="landing d-flex justify-content-center align-items-center" style="background-image: url('Front_End/Layout/images/attraction.jpg') !important ;">
        <div class="text-center box-head">
            <h1 class="landing_head-text"><?php echo $landing_att_head_text ?></h1>
        </div>
        <!-- Get dropdown of languages -->
        <?php include_once './Front_End/Template/includes/dropdown_lang.php'; ?>
    </div>
<!-- end  heading Attractions  -->


<!-- start Content Attractions -->
    <div class="experience" id="experience">
        <div class="head-section">
            <div class="container">
                <div class="head d-flex justify-content-start align-items-center">
                    <h1 class="pt-2 pb-1"><?php echo strtoupper($get_att); ?></h1>
                </div>
            </div>
        </div>

        <div class="content-list py-5">
            <div class="container">
                <div class="row g-5">
                <?php foreach($cities as $city){ ?>

                    <a href="?attraction&show=<?php echo $city['id']; ?>" class="col-lg-3 position-relative d-flex flex-column">
                        <img src="<?php echo "admin/Layout/images/upload/".$city['image'] ?>" class="w-100 h-100 image_cat" style="object-fit:cover ;"  alt="">
                        <span class=" fs-5 fw-bolder "><?php echo $_SESSION['lang'] == 'en' ? $city['name_en'] : $city['name_ar']; ?></span>
                    </a>

                <?php } ?>
                </div>
            </div>
        </div>
    </div>   
<!-- end Content Attractions -->