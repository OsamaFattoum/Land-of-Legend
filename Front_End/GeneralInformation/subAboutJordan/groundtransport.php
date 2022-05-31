<div class="ground_transport" id="">
    <!-- Start Header Of Ground Transport -->
    <div class="head-ground-transport position-relative p-5">
        <div class="container sub-head d-flex flex-column border- justify-content-center align-items-center">
            <div class="link-previous text-dark ">
                <a href="/"><?php echo strtoupper($home); ?></a> <i class="fa fa-arrow-<?php echo $dir2;?> mx-2" aria-hidden="true"></i> <a href="?page=get_around"><?php echo strtoupper($landing_getting_head_text); ?></a> <i class="fa fa-arrow-<?php echo $dir2;?> mx-2" aria-hidden="true"></i> <a href="?page=get_around&sub_page=ground_transport"><?php echo strtoupper($ground_transport) ;?></a>
            </div>
            <div class="head d-flex justify-content-center align-items-center">
                <h1 class="pt-4 pb-1"><?php echo strtoupper($ground_transport); ?></h1>
            </div>
            <div class="py-4 px-0 box-info row text-center">
                <div data-id="taxi" data-show="active" class=" col-lg-4 box px-5 py-2 text-white d-flex flex-column fs-3  ">
                    <i class="fa fa-taxi" aria-hidden="true"></i>
                    <span class="fs-5 mt-3"><?php echo $taxis ?></span>
                </div>
                <div data-id="bus" class="col-lg-4 box px-5 py-2 text-white d-flex flex-column fs-3">
                    <i class="fa fa-bus" aria-hidden="true"></i>
                    <span class="fs-5 mt-3"><?php echo $buses ?></span>
                </div>
                <div data-id="car" class=" col-lg-4  box  px-5 py-2 text-white d-flex flex-column fs-3  ">
                    <i class="fa fa-car" aria-hidden="true"></i>
                    <span class="fs-5 mt-3"><?php echo $car_rental ?></span>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Of Ground Transport -->

    <!-- Start Content Of Ground Transport -->
    <div class="content-ground-transport my-5">
        <!-- Start Section Of Ground Transport 'Taxi' -->
        <div id="taxi" class="active">
            <div class="head-taxi my-5">
                <div class="container">
                    <div class="head-content d-flex justify-content-start align-items-center">
                        <h1 class="pt-2 pb-1"><?php echo strtoupper($taxi_head); ?></h1>
                    </div>
                    <p class="fs-6 opacity-50"><?php echo $parag_taxi ?></p>
                </div>
            </div>
            <div class="container content-taxi py-5">
                <div class="row  mt-4 odd ">
                    <div class="col-lg-4">
                        <div class="img-about">
                            <img src="Front_End/Layout/images/careem.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-lg-2 mb-5"></div>
                    <div class="col-lg-6">
                        <h4 class="pb-3"><?php echo $head_careem; ?></h4>
                        <p class="lh-5 opacity-50 a-link"><?php echo $parag_careem; ?></p>
                    </div>
                </div>
                <div class="row my-5"></div>
                <div class="row  mt-4 even ">
                    <div class="col-lg-6">
                        <h4 class="pb-3"><?php echo $head_uber; ?></h4>
                        <p class="lh-5 opacity-50 a-link"><?php echo $parag_uber; ?></p>
                    </div>
                    <div class="col-lg-2 mb-5"></div>
                    <div class="col-lg-4">
                        <div class="img-about">
                            <img src="Front_End/Layout/images/uber.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                </div>
                <div class="row my-5"></div>
                <div class="row  mt-4 odd ">
                    <div class="col-lg-4">
                        <div class="img-about">
                            <img src="Front_End/Layout/images/jenny.png" alt="" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-lg-2 mb-5"></div>
                    <div class="col-lg-6">
                        <h4 class="pb-3"><?php echo $head_jenny; ?></h4>
                        <p class="lh-5 opacity-50 a-link"><?php echo $parag_jenny; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Of Ground Transport 'Taxi' -->

        <!-- Start Section Of Ground Transport 'Bus' -->
        <div id="bus">
            <div class="head-bus my-5">
                <div class="container">
                    <div class="head-content d-flex justify-content-start align-items-center">
                        <h1 class="pt-2 pb-1"><?php echo strtoupper($bus_head); ?></h1>
                    </div>
                    <p class="fs-6 opacity-50"><?php echo $parag_bus ?></p>
                </div>
            </div>
            <div class="container content-bus py-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <h5 class="card-header bg-secondary py-3 px-5 text-white"><?php echo $co_1 ;?></h5>
                            <div class="card-body px-5 flex-column d-flex">
                                <a href="tel:00962 6 5854679" class="mb-2"><i class="fa fa-phone me-3" aria-hidden="true"></i>00962 6 5854679</a>
                                <a href="mailto:info@jtt.com.jo" class="mb-2"><i class="fa fa-envelope me-3" aria-hidden="true"></i>info@jtt.com.jo</a>
                                <a href="http://www.jett.com.jo" class="mb-2"><i class="fa fa-globe me-3" aria-hidden="true"></i>www.jett.com.jo</a>
                                <span class="mb-2"><i class="fa-solid fa-location-arrow me-3"></i><?php echo $co_1_location ;?></span>
                                <span class="mb-2"><i class="fa-solid fa-user me-3"></i><?php echo $co_1_owner ;?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <h5 class="card-header bg-secondary py-3 px-5 text-white"><?php echo $co_2 ;?></h5>
                            <div class="card-body px-5 flex-column d-flex">
                                <a href="tel:00962 6 5854679" class="mb-2"><i class="fa fa-phone me-3" aria-hidden="true"></i>00962 6 5850430</a>
                                <a href="mailto:info@alpha-jo.com" class="mb-2"><i class="fa fa-envelope me-3" aria-hidden="true"></i>info@alpha-jo.com</a>
                                <a href="http://www.alpha-jo.com" class="mb-2"><i class="fa fa-globe me-3" aria-hidden="true"></i>www.alpha-jo.com</a>
                                <span class="mb-2"><i class="fa-solid fa-location-arrow me-3"></i><?php echo $co_2_location ;?></span>
                                <span class="mb-2"><i class="fa-solid fa-user me-3"></i><?php echo $co_2_owner ;?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3"></div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <h5 class="card-header bg-secondary py-3 px-5 text-white"><?php echo $co_3 ;?></h5>
                            <div class="card-body px-5 flex-column d-flex">
                                <a href="tel:00962 6 5854679" class="mb-2"><i class="fa fa-phone me-3" aria-hidden="true"></i>00962 6 4396555</a>
                                <a href="mailto:Eminfo@mesktransport.com" class="mb-2"><i class="fa fa-envelope me-3" aria-hidden="true"></i> Eminfo@mesktransport.com</a>
                                <a href="http://www.mesktransport.com" class="mb-2"><i class="fa fa-globe me-3" aria-hidden="true"></i> www.mesktransport.com</a>
                                <span class="mb-2"><i class="fa-solid fa-location-arrow me-3"></i><?php echo $co_3_location ;?></span>
                                <span class="mb-2"><i class="fa-solid fa-user me-3"></i><?php echo $co_3_owner ;?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card h-100">
                            <h5 class="card-header bg-secondary py-3 px-5 text-white"><?php echo $co_4 ;?></h5>
                            <div class="card-body px-5 flex-column d-flex">
                                <a href="tel:00962 6 4120779" class="mb-2"><i class="fa fa-phone me-3" aria-hidden="true"></i>00962 6 4120779</a>
                                <a href="mailto:info@philadelphia.jo" class="mb-2"><i class="fa fa-envelope me-3" aria-hidden="true"></i> info@philadelphia.jo</a>
                                <span class="mb-2"><i class="fa-solid fa-location-arrow me-3"></i><?php echo $co_4_location ;?></span>
                                <span class="mb-2"><i class="fa-solid fa-user me-3"></i><?php echo $co_4_owner ;?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3"></div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <h5 class="card-header bg-secondary py-3 px-5 text-white"><?php echo $co_5 ;?></h5>
                            <div class="card-body px-5 flex-column d-flex">
                                <a href="tel:00962 6 4290667" class="mb-2"><i class="fa fa-phone me-3" aria-hidden="true"></i>00962 6 4290667</a>
                                <a href="mailto:info@rumtrans.com" class="mb-2"><i class="fa fa-envelope me-3" aria-hidden="true"></i> info@rumtrans.com</a>
                                <a href="http://www.rumtrans.com" class="mb-2"><i class="fa fa-globe me-3" aria-hidden="true"></i> www.rumtrans.com</a>
                                <span class="mb-2"><i class="fa-solid fa-location-arrow me-3"></i><?php echo $co_5_location ;?></span>
                                <span class="mb-2"><i class="fa-solid fa-user me-3"></i><?php echo $co_5_owner ;?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card h-100">
                            <h5 class="card-header bg-secondary py-3 px-5 text-white"><?php echo $co_6 ;?></h5>
                            <div class="card-body px-5 flex-column d-flex">
                                <a href="mailto:rent1@kirresh.com" class="mb-2"><i class="fa fa-envelope me-3" aria-hidden="true"></i>rent1@kirresh.com</a>
                                <a href="http://www.kirreshgroup.com" class="mb-2"><i class="fa fa-globe me-3" aria-hidden="true"></i>www.kirreshgroup.com</a>
                                <span class="mb-2"><i class="fa-solid fa-location-arrow me-3"></i><?php echo $co_6_location ;?></span>
                                <span class="mb-2"><i class="fa-solid fa-user me-3"></i><?php echo $co_6_owner ;?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3"></div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <h5 class="card-header bg-secondary py-3 px-5 text-white"><?php echo $co_7 ;?></h5>
                            <div class="card-body px-5 flex-column d-flex">
                                <a href="tel:00962 797600206" class="mb-2"><i class="fa fa-phone me-3" aria-hidden="true"></i>00962 797600206</a>
                                <a href="mailto:info@smartway.com.jo" class="mb-2"><i class="fa fa-envelope me-3" aria-hidden="true"></i> info@smartway.com.jo</a>
                                <a href="http://www.smartway.com.jo" class="mb-2"><i class="fa fa-globe me-3" aria-hidden="true"></i> www.smartway.com.jo</a>
                                <span class="mb-2"><i class="fa-solid fa-location-arrow me-3"></i><?php echo $co_7_location ;?></span>
                                <span class="mb-2"><i class="fa-solid fa-user me-3"></i><?php echo $co_7_owner ;?> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card h-100">
                            <h5 class="card-header bg-secondary py-3 px-5 text-white"><?php echo $co_8 ;?></h5>
                            <div class="card-body px-5 flex-column d-flex">
                                <a href="tel:00962 6 4714714" class="mb-2"><i class="fa fa-phone me-3" aria-hidden="true"></i>00962 6 4714714</a>
                                <a href="mailto:hamzehzagha@sultania.jo" class="mb-2"><i class="fa fa-envelope me-3" aria-hidden="true"></i>hamzehzagha@sultania.jo</a>
                                <span class="mb-2"><i class="fa-solid fa-location-arrow me-3"></i><?php echo $co_8_location ;?></span>
                                <span class="mb-2"><i class="fa-solid fa-user me-3"></i><?php echo $co_8_owner ;?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3"></div>
            </div>
        </div>
        <!-- End Section Of Ground Transport 'Bus' -->

        <!-- Start Section Of Ground Transport 'Car' -->
        <div id="car">
            <div class="head-car my-5">
                <div class="container">
                    <div class="head-content d-flex justify-content-start align-items-center">
                        <h1 class="pt-2 pb-1"><?php echo strtoupper($car_head); ?></h1>
                    </div>
                    <p class="fs-6 opacity-50"><?php echo $parag_car ?></p>
                </div>
            </div>
        </div>
        <!-- End Section Of Ground Transport 'Car' -->
    </div>
    <!-- End Content Of Ground Transport -->
</div>