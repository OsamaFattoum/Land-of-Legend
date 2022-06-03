<?php
      /****** Query Get Cities Form Database  ****** */
      $cities = DataBaseQuery::selectQuery('*','cities');

    if(isset($_POST['add_ticket'])){

        $price = $_POST['price'];
        $city = $_POST['city_id'];
        
        /** if the query false will be add error msg and show */
        if(empty($price) && $city == '..'){
            $msg .= "All Field Is Empty!<br>";
        }else{
            if($price > 30){
                $msg .= "Price is so Expensive!<br>";
            }

            if(empty($price)){
                $msg .= "Price Field Is Empty!<br>";
            }
            if($city == '..'){
                $msg .= "City Is Empty!<br>";
            }
        }
        /** if the message empty its like mean we don't 
         * have error then add message success and redirect to users page 
         * */
        if(empty($msg)){

            /****** Query to Insert Ticket Form Database  ****** */
            $inserted = DataBaseQuery::insertQuery('tickets','price,city_id',"?,?",null,null,[$price,$city]);

            if($inserted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Ticket Add Successfully';
            header("location:?page=tickets");
            exit();
            }

        }
    }
?>


<!-- Start Header Add Ticket  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Add Ticket</h1>
        </div>
        <?php if(!empty($msg)){ ?>
            <div class="alert alert-danger w-100" role="alert">
                <?php echo $msg; ?>
            </div>
        <?php } ?>
    </div>
<!-- End Header Add Ticket  -->

<div class="row py-3"></div>


<!-- Start Content Add Ticket  -->
    <div class="row pb-2">
        <form class="bg-dark p-3 rounded" action="?page=tickets&add" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputusername" class="form-label text-white">Price</label>
                    <input type="number" name="price" class="form-control" id="exampleInputusername" aria-describedby="">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="inputcountry" class="form-label  text-white">Country</label>
                    <select class="form-select"  name="city_id" aria-label="Default select example" id="inputcountry">
                        <option selected value="..">...</option>
                        <?php foreach($cities as $city){ 
                            echo "<option value=".$city['id'].">".strtoupper($city['name_en'])."</option>";
                        } ?>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="add_ticket">Add Ticket</button>
        </form>
    </div>
    <div class="mt-5">
        <a href="?page=tickets" class="btn btn-info"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
    </div>
<!-- End Content Add Ticket  -->