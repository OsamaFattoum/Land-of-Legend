<?php
    if(isset($_GET['edit'])){

        $id = $_GET['edit'];

        /****** Query Get Cities Form Database  ****** */
        $cities = DataBaseQuery::selectQuery('*','cities');
        /****** Query cheak if id exist in database  ****** */
        $row = DataBaseQuery::rowSelected('id','tickets','WHERE id = ?',[$id]);

    if($row > 0 ){
    /****** Query Get City Info Form Database  ****** */
    $ticket = DataBaseQuery::selectOneQuery('*','tickets','WHERE id=?',[$id]);
    
    if(isset($_POST['edit_ticket'])){

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
         * have error then add message success and redirect to news page 
         * */
        if(empty($msg)){
            /****** Query to Update Ticket Form Database  ****** */
            $updated = DataBaseQuery::updateQuery('tickets','price=?,city_id=?',"WHERE id= $id",[$price,$city]);
            if($updated > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Ticket Edit Successfully';
            header("location:?page=tickets");
            exit();
            }

        }
    }
?>


<!-- Start Header Edit Ticket  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Edit Ticket</h1>
        </div>
        <?php if(!empty($msg)){ ?>
            <div class="alert alert-danger w-100" role="alert">
                <?php echo $msg; ?>
            </div>
        <?php } ?>
    </div>
<!-- End Header Edit Ticket  -->

<div class="row py-3"></div>


<!-- Start Content Edit Ticket  -->
    <div class="row pb-2">
    <form class="bg-dark p-3 rounded" action="?page=tickets&edit=<?php echo $ticket['id']?>" method="POST">
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputusername" class="form-label text-white">Price</label>
                    <input type="number" name="price" value="<?php echo $ticket['price']?>" class="form-control" id="exampleInputusername" aria-describedby="">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="inputcountry" class="form-label  text-white">City</label>
                    <select class="form-select"  name="city_id"  aria-label="Default select example" id="inputcountry">
                        <option selected value="..">...</option>
                        <?php foreach($cities as $city){
                            if($ticket['city_id'] == $city['id']){
                                echo "<option selected value=".$city['id'].">".strtoupper($city['name_en'])."</option>";
                            }else{
                                echo "<option value=".$city['id'].">".strtoupper($city['name_en'])."</option>";
                            }
                            
                        } ?>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="edit_ticket">Edit Ticket</button>
        </form>
    </div>
    <div class="mt-5">
        <a href="?page=tickets" class="btn btn-info"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
    </div>
<!-- End Content Edit Ticket  -->



<?php 
        }else{
            $_SESSION['type'] = 'danger';
            $_SESSION['msg'] = 'This Ticket Doesn\'t Exist';
            header("location:?page=tickets");
            exit();
        }
    } 
?>