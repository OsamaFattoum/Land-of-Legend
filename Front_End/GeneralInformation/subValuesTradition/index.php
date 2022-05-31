<!-- start Values & Tradition -->
<div class="val_tradition" id="val_tradition">
    <div class="head-section">
        <div class="container">
            <div class="head d-flex justify-content-start align-items-center">
                <h1 class="pt-2 pb-1"><?php echo strtoupper($get_val); ?></h1>
            </div>
            <p class="fs-6"><?php echo $parag_val ?></p>
        </div>
    </div>
</div>
<div class="content-list py-5">
<div class="container h-100">
    <!-- Start Feasting Link -->
    <a class="row mt-4  py-4" href="?page=val_tradition&sub_page=feasting">
        <div class="col-lg-3">
            <div class="img">
                <img src="Front_End/Layout/images/feasting.jpg" alt="" class="w-100 h-100">
            </div>
        </div>
        <div class="col-lg-3 d-flex align-items-center">
            <div class="text">
                <span class="fs-4 fw-semibold"><?php echo $val_feasting; ?></span>
            </div>
        </div>
        <div class="col-lg-4"></div>
        <div class="icon col-lg-2 d-flex align-items-center">
            <i class="fa <?php echo $_SESSION['lang'] == 'en' ? 'fa-arrow-right' : 'fa-arrow-left'; ?> fs-2" aria-hidden="true"></i>
        </div>
    </a>
        <!-- End Feasting Link -->
    <hr>
    <!-- Start Local-customs Link -->
    <a class="row mt-4 py-4" href="?page=val_tradition&sub_page=local_custom">
        <div class="col-lg-3">
            <div class="img">
                <img src="Front_End/Layout/images/local-customs.jpg" alt="" class="w-100 h-100">
            </div>
        </div>
        <div class="col-lg-3 d-flex align-items-center">
            <div class="text">
                <span class="fs-4 fw-semibold"><?php echo $val_customs; ?></span>
            </div>
        </div>
        <div class="col-lg-4"></div>
        <div class="icon col-lg-2 d-flex align-items-center">
            <i class="fa <?php echo $_SESSION['lang'] == 'en' ? 'fa-arrow-right' : 'fa-arrow-left'; ?> fs-2" aria-hidden="true"></i>
        </div>
    </a>
        <!-- End Local-customs Link -->
    <hr>
    <!-- Start Religion Link -->
    <a class="row mt-4  py-4" href="?page=val_tradition&sub_page=religion">
        <div class="col-lg-3">
            <div class="img">
                <img src="Front_End/Layout/images/Religion.jpg" alt="" class="w-100 h-100">
            </div>
        </div>
        <div class="col-lg-3 d-flex align-items-center">
            <div class="text">
                <span class="fs-4 fw-semibold"><?php echo $val_religion; ?></span>
            </div>
        </div>
        <div class="col-lg-4"></div>
        <div class="icon col-lg-2 d-flex align-items-center">
            <i class="fa <?php echo $_SESSION['lang'] == 'en' ? 'fa-arrow-right' : 'fa-arrow-left'; ?> fs-2" aria-hidden="true"></i>
        </div>
    </a>
    <!-- End Religion Link -->
    <!-- Start Ramdan Link -->
    <a class="row mt-4  py-4" href="?page=val_tradition&sub_page=ramdan">
        <div class="col-lg-3">
            <div class="img">
                <img src="Front_End/Layout/images/religion-1.jpg" alt="" class="w-100 h-100">
            </div>
        </div>
        <div class="col-lg-3 d-flex align-items-center">
            <div class="text">
                <span class="fs-4 fw-semibold"><?php echo $val_ramdan; ?></span>
            </div>
        </div>
        <div class="col-lg-4"></div>
        <div class="icon col-lg-2 d-flex align-items-center">
            <i class="fa <?php echo $_SESSION['lang'] == 'en' ? 'fa-arrow-right' : 'fa-arrow-left'; ?> fs-2" aria-hidden="true"></i>
        </div>
    </a>
    <!-- End Ramdan Link -->
</div>
</div>