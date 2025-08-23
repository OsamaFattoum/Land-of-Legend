   <!-- start heading landing -->
   <div class="landing d-flex justify-content-center align-items-center" style="background-image: url('Front_End/Layout/images/index.jpg')!important;">
       <div class="text-center box-head">
           <h1 class="landing_head-text"><?php echo $landing_head_text ?></h1>
           <h4>(<?php echo $landing_sub_text ?>)</h4>
       </div>

         <!-- Get dropdown of languages -->
       <?php include_once './Front_End/Template/includes/dropdown_lang.php'; ?>
       
   </div>
   <!-- end heading landing -->
   
   <!-- start about jordan -->
   <div class="about" id="about_jordan">
       <div class="head-section ">
           <div class="container">
               <div class="head d-flex justify-content-start align-items-center">
                   <h1 class="pt-2 pb-1"><?php echo strtoupper($about_jordan); ?></h1>
               </div>
               <p class="fs-5"><?php echo $parag_about ?></p>
           </div>
       </div>
       <div class="content-about-jordan py-5">
           <div class="container">
               <!-- start goverment -->
               <div class="row goverment mt-4 odd ">
                   <div class="col-lg-6">
                       <div class="img-about">
                           <img src="Front_End/Layout/images/2.jpg" alt="" class="w-100 h-100">
                       </div>
                   </div>
                   <div class="col-lg-1 mb-5"></div>
                   <div class="col-lg-5">
                       <h4 class="pb-3"><?php echo $head_goverment; ?></h4>
                       <p class="lh-5 opacity-50"><?php echo $parag_goverment; ?></p>
                   </div>
               </div>
               <!-- end goverment -->
               <div class="row my-5"></div>
               <!-- start history -->
               <div class="row history even">
                   <div class="col-lg-5">
                       <h4 class="pb-3"><?php echo $head_history; ?></h4>
                       <p class="lh-5 opacity-50"><?php echo $parag_history; ?></p>
                   </div>
                   <div class="col-lg-1 col-md-12 mb-5"></div>
                   <div class="col-lg-6 col-md-12">
                       <div class="img-about">
                           <img src="Front_End/Layout/images/3.jpg" alt="" class="w-100 h-100">
                       </div>
                   </div>
               </div>
               <!-- end history -->
               <div class="row my-5"></div>
               <!-- start royal -->
               <div class="row royal mt-4 odd ">
                   <div class="col-lg-6">
                       <div class="img-about">
                           <img src="Front_End/Layout/images/1.jpg" alt="" class="w-100 h-100">
                       </div>
                   </div>
                   <div class="col-lg-1 mb-5"></div>
                   <div class="col-lg-5">
                       <h4 class="pb-3"><?php echo $head_royal; ?></h4>
                       <p class="lh-5 opacity-50"><?php echo $parag_royal; ?></p>
                   </div>
               </div>
               <div class="row my-5"></div>
               <div class="row royal even">
                   <div class="col-lg-5">
                       <p class="lh-5 opacity-50"><?php echo $parag_royal2; ?></p>
                   </div>
                   <div class="col-lg-1 col-md-12 mb-5"></div>
                   <div class="col-lg-6 col-md-12">
                       <div class="img-about">
                           <img src="Front_End/Layout/images/4.jpg" alt="" class="w-100 h-100">
                       </div>
                   </div>
               </div>
               <div class="row my-5">
                   <div class="col-12">
                       <p class="lh-5 opacity-50"><?php echo $parag_royal3; ?></p>
                   </div>
               </div>
               <div class="row my-5">
                   <div class="col-12">
                       <div class="img-about">
                           <img src="Front_End/Layout/images/5.png" alt="" class="w-100 h-100">
                       </div>
                   </div>
               </div>
               <div class="row my-5">
                   <div class="col-12">
                       <p class="lh-5 opacity-50 a-link"><?php echo $parag_royal4; ?><br><a href="https://kingabdullah.jo/" target="_blank">www.kingabdullah.jo</a><br><a target="_blank" href="https://www.queenrania.jo/">www.queenrania.jo</a></p>
                   </div>
               </div>
               <!-- end royal -->
           </div>
       </div>
   </div>
   <!-- end about jordan -->

