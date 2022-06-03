<?php
    if(isset($_POST['add_country'])){

        $name = $_POST['name'];

        /****** Query check if country Name Exist Form Database  ****** */
        $row = DataBaseQuery::rowSelected('name','countries','WHERE name = ?',[$name]);

        /** if the query false will be add error msg and show */
        if($row > 0){
            $msg .= "This Country Name Already Exist";
        }
        if(empty($name)){
            $msg .= "Name Country Field Is Empty!<br>";
        }
        /** if the message empty its like mean we don't 
         * have error then add message success and redirect to users page 
         * */
        if(empty($msg)){

            /****** Query to Insert country Form Database  ****** */
            $inserted = DataBaseQuery::insertQuery('countries','name',"?",null,null,[$name]);

            if($inserted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Country Add Successfully';
            header("location:?page=countries");
            exit();
            }

        }
    }
?>


<!-- Start Header Add Country  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Add Country</h1>
        </div>
        <?php if(!empty($msg)){ ?>
            <div class="alert alert-danger w-100" role="alert">
                <?php echo $msg; ?>
            </div>
        <?php } ?>
    </div>
<!-- End Header Add Country  -->

<div class="row py-3"></div>


<!-- Start Content Add Country  -->
    <div class="row pb-2">
        <form class="bg-dark p-3 rounded" action="?page=countries&add" method="POST" enctype="multipart/form-data">
            <div class="mb-3 ">
                <label for="exampleInputusername" class="form-label text-white">Name Country</label>
                <input type="text" name="name" class="form-control" id="exampleInputusername" aria-describedby="">
            </div>
            <button type="submit" class="btn btn-primary" name="add_country">Add Country</button>
        </form>
    </div>
    <div class="mt-5">
        <a href="?page=countries" class="btn btn-info"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
    </div>
<!-- End Content Add Country  -->