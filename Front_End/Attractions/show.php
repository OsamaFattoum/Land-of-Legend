<?php

        $id = $_GET['show'];

        /****** Query cheak if id exist in database  ****** */
        $row = DataBaseQuery::rowSelected('id','cities','WHERE id = ?',[$id]);

    if($row > 0){


        /****** Query Get City Form Database  ****** */
        $city = DataBaseQuery::selectOneQuery('*','cities','WHERE id='.$id);
        /****** Query Get Content Form Database  ****** */
        $contents = DataBaseQuery::selectQuery('*','content','WHERE city_id='.$id);
       
?>


<!-- start heading Attractions Show -->
    <div class="landing d-flex justify-content-center align-items-center" style="background-image: url(<?php echo 'admin/Layout/images/upload/'.$city['image']?>) !important ; object-fit:cover !important;">
        <div class="text-center box-head">
            <h1 class="landing_head-text"><?php echo $_SESSION['lang'] == 'en' ? $city['name_en'] : $city['name_ar'] ?></h1>
        </div>
        <!-- Get dropdown of languages -->
        <?php include_once './Front_End/Template/includes/dropdown_lang.php'; ?>
    </div>
<!-- end  heading Attractions Show -->


<!-- start Content Attractions Show -->
<div class="attraction" id="attraction">
    <!-- Start Head Of City -->
    <div class="head-section">
        <div class="container">
            <div class="container sub-head d-flex flex-column border- justify-content-center align-items-center">
                <div class="link-previous text-dark ">
                    <a href="/"><?php echo strtoupper($home); ?></a> <i class="fa fa-arrow-<?php echo $dir2;?> mx-2" aria-hidden="true"></i> <a href="?attraction"><?php echo strtoupper($landing_att_head_text); ?></a> <i class="fa fa-arrow-<?php echo $dir2;?> mx-2" aria-hidden="true"></i> <a href="?attraction&show=<?php echo $city['id']?>"><?php echo $_SESSION['lang'] == 'en' ? strtoupper($city['name_en']) : strtoupper($city['name_ar']) ?></a>
                </div>
            </div>
            <div class="head d-flex justify-content-start align-items-center">
                <h1 class="pt-2 pb-1"><?php echo $_SESSION['lang'] == 'en' ? $city['name_en'] : $city['name_ar'] ?></h1>
            </div>
            <p class="fs-5"><?php echo $_SESSION['lang'] == 'en' ? $city['desc_en'] : $city['desc_ar'] ?></p>
            <div class="container head-attraction d-flex flex-column justify-content-center align-items-center">
                <div class="py-4 px-0 box-info row text-center">
                    <div data-id="content" data-show="active" class=" col-lg-6 box px-5 py-2 text-white d-flex flex-column fs-3  ">
                        <i class="fa fa-file-lines" aria-hidden="true"></i>
                        <span class="fs-5 mt-3"><?php echo $content ?></span>
                    </div>
                    <div data-id="map" class="col-lg-6 box px-5 py-2 text-white d-flex flex-column fs-3">
                        <i class="fa fa-map" aria-hidden="true"></i>
                        <span class="fs-5 mt-3"><?php echo $map ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Head Of City -->
    <!-- Start Content Of City -->
    <div class="content-attraction my-5">
        <!-- Start Section Of Attraction 'content' -->
        <div id="content" class="active">
            <div class="container content-city py-5">
                <?php for($i = 0 ; $i < count($contents) ; $i++){ 

                    if(fmod($i,2) == 0){?>
                    <div class="row  mt-4 odd ">
                        <div class="col-lg-4">
                            <div class="img-about">
                                <img src="admin/Layout/images/upload/<?php echo $contents[$i]['image']?>" alt="" class="w-100 h-100">
                            </div>
                        </div>
                        <div class="col-lg-2 mb-5"></div>
                        <div class="col-lg-6">
                            <h4 class="pb-3"><?php echo $_SESSION['lang'] == 'en' ? $contents[$i]['name_en'] : $contents[$i]['name_ar'] ?></h4>
                            <p class="lh-5 opacity-50 a-link"><?php echo $_SESSION['lang'] == 'en' ? $contents[$i]['desc_en'] : $contents[$i]['desc_ar'] ?></p>
                        </div>
                    </div>
                    <div class="row my-5"></div> 
                <?php }else{?>
                    <div class="row  mt-4 even ">
                        <div class="col-lg-6">
                            <h4 class="pb-3"><?php echo $_SESSION['lang'] == 'en' ? $contents[$i]['name_en'] : $contents[$i]['name_ar'] ?></h4>
                            <p class="lh-5 opacity-50 a-link"><?php echo $_SESSION['lang'] == 'en' ? $contents[$i]['desc_en'] : $contents[$i]['desc_ar'] ?></p>
                        </div>
                        <div class="col-lg-2 mb-5"></div>
                       
                        <div class="col-lg-4">
                            <div class="img-about">
                                <img src="admin/Layout/images/upload/<?php echo $contents[$i]['image']?>" alt="" class="w-100 h-100">
                            </div>
                        </div>
                    </div>
                    <div class="row my-5"></div> 
                <?php }} ?>
            </div>
        </div>
        <!-- End Section Of Attraction 'content' -->
        <!-- Start Section Of Attraction 'map' -->
        <div id="map" class="">
            <div class="container content-city py-5">
                <div class="row  mt-4 odd ">
                    <div class="col">
                    <iframe class="w-100" width="200" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=jordan,<?php echo $city['name_en']?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Of Attraction 'map' -->
    </div>
    <!-- End Content Of City -->
    </div>   
<!-- end Content Attractions Show -->



<?php }else{
    header("location:?attraction");
    exit;
} ?>