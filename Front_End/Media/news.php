<?php

 /****** Query Get News Form Database  ****** */
 $news = DataBaseQuery::selectQuery('*','news');


?>


<!-- start heading News -->
    <div class="landing d-flex justify-content-center align-items-center" style="background-image: url('Front_End/Layout/images/news.png') !important ;">
        <div class="text-center box-head">
            <h1 class="landing_head-text"><?php echo $landing_news_head_text ?></h1>
        </div>
        <!-- Get dropdown of languages -->
        <?php include_once './Front_End/Template/includes/dropdown_lang.php'; ?>
    </div>
<!-- end  heading News  -->



<!-- start Content News -->
<div class="news" id="news">
        <div class="head-section">
            <div class="container">
                <div class="head d-flex justify-content-start align-items-center">
                    <h1 class="pt-2 pb-1"><?php echo strtoupper($get_news); ?></h1>
                </div>
            </div>
        </div>

        <div class="content-list py-5">
            <div class="container">
                <?php foreach($news as $new){ ?>
                    <div class="card mb-3">
                        <img class="card-img-top w-50 h-50 mb-3" src="<?php echo "admin/Layout/images/upload/".$new['image'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted"><?php echo $new['date'] ?></small></p>
                            <h5 class="card-title mb-4"><?php echo $_SESSION['lang'] == 'en' ? $new['name_en'] : $new['name_ar']; ?></h5>
                            <p class="card-text"><?php echo $_SESSION['lang'] == 'en' ? wordwrap($new['desc_en'],strlen($new['desc_en'])/8,'<br>',true) : wordwrap($new['desc_ar'],strlen($new['desc_ar'])/8,'<br>',true); ?></p>
                            
                        </div>
                    </div>
                <?php } ?>
            </div>    
        </div>
</div>