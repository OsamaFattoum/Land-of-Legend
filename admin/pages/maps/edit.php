<?php
    if(isset($_GET['edit'])){

        $id = $_GET['edit'];

        /****** Query Get Cities Form Database  ****** */
        $cities = DataBaseQuery::selectQuery('*','cities');
        /****** Query cheak if id exist in database  ****** */
        $row = DataBaseQuery::rowSelected('id','maps','WHERE id = ?',[$id]);

    if($row > 0 ){
    /****** Query Get Map Info Form Database  ****** */
    $map = DataBaseQuery::selectOneQuery('*','maps','WHERE id=?',[$id]);
    
    if(isset($_POST['edit_map'])){

        $city = $_POST['city_id'];

        /****** Query check if City Name Exist Form Database  ****** */
        $row2 = DataBaseQuery::rowSelected('city_id','maps','WHERE city_id = ?',[$city]);

        
        /** if the query false will be add error msg and show */
        if($row2 > 0){
            $msg .= "This City Already Exist";
        }
        if($city == '..'){
            $msg .= "City Field Is Empty!<br>";
        }
        /** if the message empty its like mean we don't 
         * have error then add message success and redirect to news page 
         * */
        if(empty($msg)){
            /****** Query to Update Map Form Database  ****** */
            $updated = DataBaseQuery::updateQuery('maps','city_id=?',"WHERE id= $id",[$city]);
            if($updated > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Map Edit Successfully';
            header("location:?page=maps");
            exit();
            }

        }
    }
?>


<!-- Start Header Edit Map  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Edit Map</h1>
        </div>
        <?php if(!empty($msg)){ ?>
            <div class="alert alert-danger w-100" role="alert">
                <?php echo $msg; ?>
            </div>
        <?php } ?>
    </div>
<!-- End Header Edit Map  -->

<div class="row py-3"></div>


<!-- Start Content Edit Map  -->
    <div class="row pb-2">
    <form class="bg-dark p-3 rounded" action="?page=maps&edit=<?php echo $map['id']?>" method="POST">
            <div class="mb-3">
                    <label for="inputcountry" class="form-label  text-white">City</label>
                    <select class="form-select"  name="city_id"  aria-label="Default select example" id="inputcountry">
                        <option selected value="..">...</option>
                        <?php foreach($cities as $city){
                            if($map['city_id'] == $city['id']){
                                echo "<option selected value=".$city['id'].">".strtoupper($city['name_en'])."</option>";
                            }else{
                                echo "<option value=".$city['id'].">".strtoupper($city['name_en'])."</option>";
                            }
                            
                        } ?>
                    </select>
            </div>
            <button type="submit" class="btn btn-primary" name="edit_map">Edit Map</button>
        </form>
    </div>
    <div class="mt-5">
        <a href="?page=maps" class="btn btn-info"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
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