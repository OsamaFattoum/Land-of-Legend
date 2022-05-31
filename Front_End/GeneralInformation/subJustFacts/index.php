<!-- start just facts -->
<div class="just-fact" id="just_facts">
    <div class="head-section">
        <div class="container">
            <div class="head d-flex justify-content-start align-items-center">
                <h1 class="pt-2 pb-1"><?php echo strtoupper($get_facts); ?></h1>
            </div>
            <p class="fs-6"><?php echo $parag_facts ?></p>
        </div>
    </div>

    <div class="content-list py-5">
        <div class="container">
            <div class="info my-5">
                <h4 class="opacity-75"><?php echo $head_1?></h4>
                <p class="opacity-50"><?php echo $parag_1?></p>
            </div>
            <div class="info my-5">
                <h4 class="opacity-75"><?php echo $head_2?></h4>
                <p class="opacity-50"><?php echo $parag_2?></p>
            </div>
            <div class="info my-5">
                <h4 class="opacity-75"><?php echo $head_3?></h4>
                <p class="opacity-50"><?php echo $parag_3?></p>
            </div>
            <?php if($_SESSION['lang'] == 'en'){ ?>
                <div class="info my-5">
                <h4 class="opacity-75"><?php echo $head_13?></h4>
                <p class="opacity-50 mb-5"><?php echo $parag_13?></p>
                <?php include_once "./Front_End/Template/includes/tabels/languagesTable.php"; ?>
            </div>
            <?php }else{ ?>
            <div class="info my-5">
                <h4 class="opacity-75"><?php echo $head_13?></h4>
                <p class="opacity-50 mb-5"><?php echo $parag_13?></p>
            </div>
            <?php } ?>
            <div class="info my-5">
                <h4 class="opacity-75"><?php echo $head_4?></h4>
                <p class="opacity-50"><?php echo $parag_4?></p>
            </div>
            <div class="info my-5">
                <h4 class="opacity-75"><?php echo $head_5?></h4>
                <p class="opacity-50"><?php echo $parag_5?></p>
            </div>
            <div class="info my-5">
                <h4 class="opacity-75"><?php echo $head_6?></h4>
                <p class="opacity-50"><?php echo $parag_6?></p>
            </div>
            <div class="info my-5">
                <h4 class="opacity-75"><?php echo $head_7?></h4>
                <p class="opacity-50"><?php echo $parag_7?></p>
            </div>
            <div class="info my-5">
                <h4 class="opacity-75"><?php echo $head_8?></h4>
                <p class="opacity-50"><?php echo $parag_8?></p>
            </div>
            <div class="info my-5">
                <h4 class="opacity-75"><?php echo $head_9?></h4>
                <p class="opacity-50"><?php echo $parag_9?></p>
            </div>
            <div class="info my-5">
                <h4 class="opacity-75"><?php echo $head_10?></h4>
                <p class="opacity-50"><?php echo $parag_10?></p>
            </div>
            <div class="info my-5">
                <h4 class="opacity-75"><?php echo $head_11?></h4>
                <p class="opacity-50"><?php echo $parag_11?></p>
            </div>
            <div class="info my-5">
                <h4 class="opacity-75"><?php echo $head_12?></h4>
                <p class="opacity-50"><?php echo $parag_12?></p>
            </div>
            <div class="info my-5">
                <h4 class="opacity-75"><?php echo $head_14?></h4>
                <p class="opacity-50"><?php echo $parag_14?></p>
            </div>
        </div>
        <div class="container h-100">
               <!-- Start Fees Link -->
                <a class="row mt-4  py-4" href="?page=just_facts&sub_page=fees">
                    <div class="col-lg-3">
                        <div class="img">
                            <img src="Front_End/Layout/images/entrance-fees.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center">
                        <div class="text">
                            <span class="fs-4 fw-semibold"><?php echo $facts_fees; ?></span>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="icon col-lg-2 d-flex align-items-center">
                        <i class="fa <?php echo $_SESSION['lang'] == 'en' ? 'fa-arrow-right' : 'fa-arrow-left'; ?> fs-2" aria-hidden="true"></i>
                    </div>
                </a>
                 <!-- End Fees Link -->
                <hr>
                <!-- Start Visas Link -->
                <a class="row mt-4 py-4" href="?page=just_facts&sub_page=visas">
                    <div class="col-lg-3">
                        <div class="img">
                            <img src="Front_End/Layout/images/visas.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center">
                        <div class="text">
                            <span class="fs-4 fw-semibold"><?php echo $facts_visas; ?></span>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="icon col-lg-2 d-flex align-items-center">
                        <i class="fa <?php echo $_SESSION['lang'] == 'en' ? 'fa-arrow-right' : 'fa-arrow-left'; ?> fs-2" aria-hidden="true"></i>
                    </div>
                </a>
                 <!-- End Visas Link -->
                <hr>
                <!-- Start Border Cross Link -->
                <a class="row mt-4  py-4" href="?page=just_facts&sub_page=cross">
                    <div class="col-lg-3">
                        <div class="img">
                            <img src="Front_End/Layout/images/border-crossing.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center">
                        <div class="text">
                            <span class="fs-4 fw-semibold"><?php echo $facts_cross; ?></span>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="icon col-lg-2 d-flex align-items-center">
                        <i class="fa <?php echo $_SESSION['lang'] == 'en' ? 'fa-arrow-right' : 'fa-arrow-left'; ?> fs-2" aria-hidden="true"></i>
                    </div>
                </a>
                <!-- End Border Cross Link -->
                <!-- Start Embassies Link -->
                <a class="row mt-4  py-4" href="?page=just_facts&sub_page=embassies">
                    <div class="col-lg-3">
                        <div class="img">
                            <img src="Front_End/Layout/images/Embassies.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center">
                        <div class="text">
                            <span class="fs-4 fw-semibold"><?php echo $facts_embass; ?></span>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="icon col-lg-2 d-flex align-items-center">
                        <i class="fa <?php echo $_SESSION['lang'] == 'en' ? 'fa-arrow-right' : 'fa-arrow-left'; ?> fs-2" aria-hidden="true"></i>
                    </div>
                </a>
                <!-- End Embassies Link -->
                <!-- Start Ports Link -->
                <a class="row mt-4  py-4" href="?page=just_facts&sub_page=ports">
                    <div class="col-lg-3">
                        <div class="img">
                            <img src="Front_End/Layout/images/Ports.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center">
                        <div class="text">
                            <span class="fs-4 fw-semibold"><?php echo $facts_ports; ?></span>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="icon col-lg-2 d-flex align-items-center">
                        <i class="fa <?php echo $_SESSION['lang'] == 'en' ? 'fa-arrow-right' : 'fa-arrow-left'; ?> fs-2" aria-hidden="true"></i>
                    </div>
                </a>
                <!-- End Ports Link -->
                <!-- Start Airports Link -->
                <a class="row mt-4  py-4" href="?page=just_facts&sub_page=airport">
                    <div class="col-lg-3">
                        <div class="img">
                            <img src="Front_End/Layout/images/Airports.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center">
                        <div class="text">
                            <span class="fs-4 fw-semibold"><?php echo $facts_airport; ?></span>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="icon col-lg-2 d-flex align-items-center">
                        <i class="fa <?php echo $_SESSION['lang'] == 'en' ? 'fa-arrow-right' : 'fa-arrow-left'; ?> fs-2" aria-hidden="true"></i>
                    </div>
                </a>
                <!-- End Airports Link -->
            </div>
    </div>
</div>   
<!-- end just facts -->
