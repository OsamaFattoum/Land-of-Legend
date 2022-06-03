<?php
    if(isset($_GET['edit'])){

        $id = $_GET['edit'];
        /****** Query Get City Form Database  ****** */
        $cities = DataBaseQuery::selectQuery('*','cities');
        /****** Query cheak if id exist in database  ****** */
        $row = DataBaseQuery::rowSelected('id','hotels','WHERE id = ?',[$id]);

    if($row > 0 ){
        /****** Query Get Hotel Info Form Database  ****** */
        $hotel = DataBaseQuery::selectOneQuery('*','hotels','WHERE id=?',[$id]);
    
    if(isset($_POST['edit_hotel'])){

       
        $name_en = $_POST['name_en'];
        $name_ar = $_POST['name_ar'];
        $desc_en = $_POST['desc_en'];
        $desc_ar = $_POST['desc_ar'];
        $star = $_POST['star'];
        $city = $_POST['city_id'];
       
        if(empty($_FILES['image']['name'])){
            $image = $hotel['image'];
        }else{
            $image = $_FILES['image'];
        }

        /** if the query false will be add error msg and show */
        if(empty($name_en) && empty($name_ar) && empty($desc_ar) && empty($desc_en) && empty($image['name']) && $star == '..' && $city == '..'){
            $msg .= "All Fields Is Empty!<br>";
        }else{
            if(empty($name_en) || empty($name_ar)){
                $msg .="Names Field Is Empty!<br>";
            }
            if(filter_var([$name_ar,$name_en],FILTER_SANITIZE_NUMBER_INT)){
                $msg .="Name Must be charactars !<br>";
            }
            if(empty($desc_ar) || empty($desc_en)){
                $msg .="Descriptions Field Is Empty!<br>";
            }
            if($city == '..'){
                $msg .= "City Is Empty!<br>";
            }
            if($star == '..'){
                $msg .= "Star Is Empty!<br>";
            }
          
        /** if the message empty its like mean we don't 
         * have error then add message success and redirect to cities page 
         * */
        if(empty($msg)){

            if(!empty($_FILES['image']['name'])){
                $image = saveImage($image);
            }

            /****** Query to Update Hotel Form Database  ****** */
            $updated = DataBaseQuery::updateQuery('hotels','name_en=?,name_ar=?,desc_en=?,desc_ar=?,image=?,stars=?,city_id=?',"WHERE id= $id",[$name_en,$name_ar,$desc_en,$desc_ar,$image,$star,$city]);
            if($updated > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Hotel Updated Successfully';
            header("location:?page=hotels");
            exit();
            }

        }
    }
}
?>


<!-- Start Header Edit Hotel  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Edit Hotel</h1>
        </div>
        <?php if(!empty($msg)){ ?>
            <div class="alert alert-danger w-100" role="alert">
                <?php echo $msg; ?>
            </div>
        <?php } ?>
    </div>
<!-- End Header Edit Hotel  -->

<div class="row py-3"></div>


<!-- Start Content Edit Hotel  -->
    <div class="row pb-2">
    <form class="bg-dark p-3 rounded" action="?page=hotels&edit=<?php echo $hotel['id']?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputusername" class="form-label text-white">Name_English</label>
                    <input type="text" name="name_en" value="<?php echo $hotel['name_en']?>" class="form-control" id="exampleInputusername" aria-describedby="">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputusername2" class="form-label text-white">Name_Arabic</label>
                    <input type="text" name="name_ar"  value="<?php echo $hotel['name_ar']?>" class="form-control" id="exampleInputusername2" aria-describedby="">
                </div>
            </div>
            <div class="row">
            <div class="form-group col-lg-6 mb-3">
                    <label for="exampleFormControlTextarea2" class="form-label text-white">Description_English</label>
                    <textarea class="form-control" name="desc_en" id="exampleFormControlTextarea2" rows="3"><?php echo $hotel['desc_en']?></textarea>
                </div>
                <div class="form-group col-lg-6 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label text-white">Description_Arabic</label>
                    <textarea class="form-control" name="desc_ar" id="exampleFormControlTextarea1" rows="3"><?php echo $hotel['desc_ar']?></textarea>
                </div>
            </div>
            <div class="mb-3">
                    <label for="exampleInputuserimage" class="form-label text-white">Image</label>
                    <input type="file" name="image"  class="form-control" id="exampleInputuserimage" aria-describedby="">
                    <div id="" class="form-text">
                        If You Don't Want to Change Image keep it Empty
                    </div>
            </div>
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="inputcat" class="form-label  text-white">Star</label>
                    <select class="form-select"  name="star" aria-label="Default select example" id="inputcountry">
                        <option selected value="..">...</option>
                        <?php for($i = 1 ; $i <= 5 ;$i++ ){ 
                            if($hotel['stars'] == $i){
                                echo "<option selected value=".$i.">".$i."</option>";
                            }else{
                                echo "<option value=".$i.">".$i."</option>";
                            }
                            
                        } ?>
                    </select>
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="inputcat" class="form-label  text-white">City</label>
                    <select class="form-select"  name="city_id" aria-label="Default select example" id="inputcountry">
                        <option selected value="..">...</option>
                        <?php foreach($cities as $city){
                            if($hotel['city_id'] == $city['id']){
                                echo "<option selected value=".$city['id'].">".strtoupper($city['name_en'])."</option>";
                            }else{
                                echo "<option value=".$city['id'].">".strtoupper($city['name_en'])."</option>";
                            }
                            
                        } ?>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="edit_hotel">Edit Hotel</button>
        </form>
    </div>
    <div class="mt-5">
        <a href="?page=hotels" class="btn btn-info"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
    </div>
<!-- End Content Edit Hotel  -->



<?php 
    }else{
            $_SESSION['type'] = 'danger';
            $_SESSION['msg'] = 'This Hotel Doesn\'t Exist';
            header("location:?page=hotels");
            exit();
        
    }
}
?>