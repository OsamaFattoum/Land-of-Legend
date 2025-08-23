<?php

        $id = $_GET['show'];

        /****** Query cheak if id exist in database  ****** */
        $row = DataBaseQuery::rowSelected('id','categorys','WHERE id = ?',[$id]);

    if($row > 0){


         /****** Query Get Category Form Database  ****** */
        $cat = DataBaseQuery::selectOneQuery('*','categorys','WHERE id = ?',[$id]);

        /****** Query Get Cities Form Database  ****** */
        $cities = DataBaseQuery::selectQuery('*','cities','WHERE cat_id = '.$id);

?>


<!-- start heading Experiances Show -->
    <div class="landing d-flex justify-content-center align-items-center" style="background-image: url(<?php echo 'admin/Layout/images/upload/'.$cat['image']?>) !important ; object-fit:cover !important;">
        <div class="text-center box-head">
            <h1 class="landing_head-text"><?php echo $_SESSION['lang'] == 'en' ? $cat['name_en'] : $cat['name_ar'] ?></h1>
        </div>
        <!-- Get dropdown of languages -->
        <?php include_once './Front_End/Template/includes/dropdown_lang.php'; ?>
    </div>
<!-- end  heading Experiances Show -->


<!-- start Content Experiances Show -->
<div class="experience" id="experience">
        <div class="head-section">
            <div class="container">
                <div class="container sub-head d-flex flex-column border- justify-content-center align-items-center">
                    <div class="link-previous text-dark ">
                        <a href="/"><?php echo strtoupper($home); ?></a> <i class="fa fa-arrow-<?php echo $dir2;?> mx-2" aria-hidden="true"></i> <a href="?expriances"><?php echo strtoupper($landing_exp_head_text); ?></a> <i class="fa fa-arrow-<?php echo $dir2;?> mx-2" aria-hidden="true"></i> <a href="?expriances&show=<?php echo $cat['id']?>"><?php echo $_SESSION['lang'] == 'en' ? strtoupper($cat['name_en']) : strtoupper($cat['name_ar']) ?></a>
                    </div>
                </div>
                <div class="head d-flex justify-content-start align-items-center">
                    <h1 class="pt-2 pb-1"><?php echo $_SESSION['lang'] == 'en' ? $cat['name_en'] : $cat['name_ar'] ?></h1>
                </div>
                <p class="fs-5"><?php echo $_SESSION['lang'] == 'en' ? $cat['desc_en'] : $cat['desc_ar'] ?></p>
            </div>
        </div>

        <div class="content-list py-5">
            <div class="container">
                <div class="row g-5">
                <?php foreach($cities as $city){?>

                    <a href="?attraction&show=<?php echo $city['id']?>" class="col-lg-3 position-relative d-flex flex-column">
                        <img src="<?php echo "admin/Layout/images/upload/".$city['image'] ?>" class="w-100 h-100 image_cat" style="object-fit:cover ;"  alt="">
                        <span class=" fs-5 fw-bolder "><?php echo $_SESSION['lang'] == 'en' ? $city['name_en'] : $city['name_ar']; ?></span>
                    </a>
                    

                <?php } ?>
                </div>
            </div>
        </div>
    </div>   
<!-- end Content Experiances Show -->



<?php }else{
    header("location:?expriances");
    exit;
} ?>