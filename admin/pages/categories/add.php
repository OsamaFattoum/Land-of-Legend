<?php
    if(isset($_POST['add_cat'])){

        $name_en = $_POST['name_en'];
        $name_ar = $_POST['name_ar'];
        $desc_en = $_POST['desc_en'];
        $desc_ar = $_POST['desc_ar'];
        $image = $_FILES['image'];


        /** if the query false will be add error msg and show */
        if(empty($name_en) && empty($name_ar) && empty($desc_ar) && empty($desc_en) && empty($image['name'])){
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
            if(empty($image['name'])){
                $msg .= "Image Is Empty!<br>";
            }
          
        }
        /** if the message empty its like mean we don't 
         * have error then add message success and redirect to Category page 
         * */
        if(empty($msg)){

            $image = saveImage($image);

            /****** Query to Insert Category Form Database  ****** */
            $inserted = DataBaseQuery::insertQuery('categorys','name_en,name_ar,desc_en,desc_ar,image',"?,?,?,?,?",null,null,[$name_en,$name_ar,$desc_en,$desc_ar,$image]);

            if($inserted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Category Add Successfully';
            header("location:?page=categories");
            exit();
            }

        }
    }
?>


<!-- Start Header Add categories  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Add Category</h1>
        </div>
        <?php if(!empty($msg)){ ?>
            <div class="alert alert-danger w-100" role="alert">
                <?php echo $msg; ?>
            </div>
        <?php } ?>
    </div>
<!-- End Header Add Category  -->

<div class="row py-3"></div>


<!-- Start Content Add Category  -->
    <div class="row pb-2">
        <form class="bg-dark p-3 rounded" action="?page=categories&add" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputusername" class="form-label text-white">Name_English</label>
                    <input type="text" name="name_en" class="form-control" id="exampleInputusername" aria-describedby="">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputusername2" class="form-label text-white">Name_Arabic</label>
                    <input type="text" name="name_ar" class="form-control" id="exampleInputusername2" aria-describedby="">
                </div>
            </div>
            <div class="row">
            <div class="form-group col-lg-6 mb-3">
                    <label for="exampleFormControlTextarea2" class="form-label text-white">Description_English</label>
                    <textarea class="form-control" name="desc_en" id="exampleFormControlTextarea2" rows="3"></textarea>
                </div>
                <div class="form-group col-lg-6 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label text-white">Description_Arabic</label>
                    <textarea class="form-control" name="desc_ar" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="mb-3">
                    <label for="exampleInputuserimage" class="form-label text-white">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputuserimage" aria-describedby="">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="add_cat">Add Category</button>
        </form>
    </div>
    <div class="mt-5">
        <a href="?page=categories" class="btn btn-info"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
    </div>
<!-- End Content Add New  -->