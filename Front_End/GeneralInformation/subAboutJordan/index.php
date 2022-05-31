    <!-- start getting around -->
    <div class="getting-around" id="get_around">
        <div class="head-section">
            <div class="container">
                <div class="head d-flex justify-content-start align-items-center">
                    <h1 class="pt-2 pb-1"><?php echo strtoupper($get_around); ?></h1>
                </div>
                <p class="fs-6"><?php echo $parag_getting ?></p>
            </div>
        </div>
        <div class="content-list py-5">
            <div class="container h-100">
               <!-- Start Ground Tranport Link -->
                <a class="row mt-4  py-4" href="?page=get_around&sub_page=ground_transport">
                    <div class="col-lg-3">
                        <div class="img">
                            <img src="Front_End/Layout/images/ground-transport.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center">
                        <div class="text">
                            <span class="fs-4 fw-semibold"><?php echo $getting_transport; ?></span>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="icon col-lg-2 d-flex align-items-center">
                        <i class="fa <?php echo $_SESSION['lang'] == 'en' ? 'fa-arrow-right' : 'fa-arrow-left'; ?> fs-2" aria-hidden="true"></i>
                    </div>
                </a>
                 <!-- End Ground Tranport Link -->
                <hr>
                <!-- Start Railroad Link -->
                <a class="row mt-4 py-4" href="?page=get_around&sub_page=rail_road">
                    <div class="col-lg-3">
                        <div class="img">
                            <img src="Front_End/Layout/images/railroad.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center">
                        <div class="text">
                            <span class="fs-4 fw-semibold"><?php echo $getting_rail; ?></span>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="icon col-lg-2 d-flex align-items-center">
                        <i class="fa <?php echo $_SESSION['lang'] == 'en' ? 'fa-arrow-right' : 'fa-arrow-left'; ?> fs-2" aria-hidden="true"></i>
                    </div>
                </a>
                 <!-- End Railroad Link -->
                <hr>
                <!-- Start Airplane Link -->
                <a class="row mt-4  py-4" href="?page=get_around&sub_page=air_line">
                    <div class="col-lg-3">
                        <div class="img">
                            <img src="Front_End/Layout/images/air-transport.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center">
                        <div class="text">
                            <span class="fs-4 fw-semibold"><?php echo $getting_airline; ?></span>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="icon col-lg-2 d-flex align-items-center">
                        <i class="fa <?php echo $_SESSION['lang'] == 'en' ? 'fa-arrow-right' : 'fa-arrow-left'; ?> fs-2" aria-hidden="true"></i>
                    </div>
                </a>
                <!-- End Airplane Link -->
            </div>
        </div>
    </div>
    <!-- end getting around -->