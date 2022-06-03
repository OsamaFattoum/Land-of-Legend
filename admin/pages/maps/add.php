<?php
     /****** Query Get Cities Form Database  ****** */
     $cities = DataBaseQuery::selectQuery('*','cities');
    
    if(isset($_POST['add_map'])){

        $city = $_POST['city_id'];

        /****** Query check if City Name Exist Form Database  ****** */
        $row = DataBaseQuery::rowSelected('city_id','maps','WHERE city_id = ?',[$city]);

        /** if the query false will be add error msg and show */
        if($row > 0){
            $msg .= "This City Already Exist";
        }
        if($city == '..'){
            $msg .= "City Field Is Empty!<br>";
        }
        /** if the message empty its like mean we don't 
         * have error then add message success and redirect to users page 
         * */
        if(empty($msg)){

            /****** Query to Insert Map Form Database  ****** */
            $inserted = DataBaseQuery::insertQuery('maps','city_id',"?",null,null,[$city]);

            if($inserted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Map Add Successfully';
            header("location:?page=maps");
            exit();
            }

        }
    }
?>


<!-- Start Header Add Map  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Add Map</h1>
        </div>
        <?php if(!empty($msg)){ ?>
            <div class="alert alert-danger w-100" role="alert">
                <?php echo $msg; ?>
            </div>
        <?php } ?>
    </div>
<!-- End Header Add Map  -->

<div class="row py-3"></div>


<!-- Start Content Add Map  -->
    <div class="row pb-2">
        <form class="bg-dark p-3 rounded" action="?page=maps&add" method="POST" enctype="multipart/form-data">
            <div class="mb-3 ">
                <label for="inputcountry" class="form-label  text-white">City</label>
                <select class="form-select"  name="city_id" aria-label="Default select example" id="inputcountry">
                    <option selected value="..">...</option>
                    <?php foreach($cities as $city){ 
                        echo "<option value=".$city['id'].">".strtoupper($city['name_en'])."</option>";
                    } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="add_map">Add Map</button>
        </form>
    </div>
    <div class="mt-5">
        <a href="?page=maps" class="btn btn-info"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
    </div>
<!-- End Content Add Maps  -->