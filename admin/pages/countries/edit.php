<?php
    if(isset($_GET['edit'])){

        $id = $_GET['edit'];

        /****** Query cheak if id exist in database  ****** */
        $row = DataBaseQuery::rowSelected('id','countries','WHERE id = ?',[$id]);

    if($row > 0 ){
    /****** Query Get Country Info Form Database  ****** */
    $country = DataBaseQuery::selectOneQuery('*','countries','WHERE id=?',[$id]);
    
    if(isset($_POST['edit_country'])){

        $name = $_POST['name'];

        /****** Query check if country Name Exist Form Database  ****** */
        $row2 = DataBaseQuery::rowSelected('name','countries','WHERE name = ?',[$name]);


         /** if the query false will be add error msg and show */
         if($row2 > 0){
            $msg .= "This Country Name Already Exist";
        }
         if(empty($name)){
            $msg .= "Name Country Field Is Empty!<br>";
        }
        /** if the message empty its like mean we don't 
         * have error then add message success and redirect to news page 
         * */
        if(empty($msg)){
            /****** Query to Update Country Form Database  ****** */
            $updated = DataBaseQuery::updateQuery('countries','name=?',"WHERE id= $id",[$name]);
            if($updated > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Country Edit Successfully';
            header("location:?page=countries");
            exit();
            }

        }
    }
?>


<!-- Start Header Edit Country  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Edit Country</h1>
        </div>
        <?php if(!empty($msg)){ ?>
            <div class="alert alert-danger w-100" role="alert">
                <?php echo $msg; ?>
            </div>
        <?php } ?>
    </div>
<!-- End Header Edit Country  -->

<div class="row py-3"></div>


<!-- Start Content Edit Country  -->
    <div class="row pb-2">
    <form class="bg-dark p-3 rounded" action="?page=countries&edit=<?php echo $country['id']?>" method="POST">
            <div class="mb-3 ">
                <label for="exampleInputusername" class="form-label text-white">Name Country</label>
                <input type="text" name="name" value="<?php echo $country['name']?>" class="form-control" id="exampleInputusername" aria-describedby="">
            </div>
            <button type="submit" class="btn btn-primary" name="edit_country">Edit Country</button>
        </form>
    </div>
    <div class="mt-5">
        <a href="?page=countries" class="btn btn-info"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
    </div>
<!-- End Content Edit Country  -->



<?php 
        }else{
            $_SESSION['type'] = 'danger';
            $_SESSION['msg'] = 'This Country Doesn\'t Exist';
            header("location:?page=countries");
            exit();
        }
    } 
?>