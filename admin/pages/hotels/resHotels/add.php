<?php
     /****** Query Get Hotels Form Database  ****** */
     $hotels = DataBaseQuery::selectQuery('*','hotels');
    $type_room = ['Laxuray Room','Medium Room','Normal Room'];

    if(isset($_POST['add_hotel_res'])){

        $type = $_POST['type'];
        $range = $_POST['range_room'];
        $price = $_POST['price'];
        $date_in = $_POST['date_in'];
        $hotel = $_POST['hotel_id'];
        $nights = $_POST['nights'];
        if(!isset($_POST['status'])){
            $status = 0;
        }else{
            $status = $_POST['status'];
        }
        $date_now = new DateTime();

        

        /** if the query false will be add error msg and show */
        if($type == '..' && $range == '..' && empty($price) && empty($date_in)  && $nights == '..' && $hotel == '..'){
            $msg .= "All Fields Is Empty!<br>";
        }else{
            if($type == '..'){
                $msg .="Type Is Empty!<br>";
            }
            if($range == '..'){
                $msg .="Range Is Empty!<br>";
            }
            if(empty($price)){
                $msg .= "Price Is Empty!<br>";
            }
            if($price > 500){
                $msg .= "Price Is Excpinsive!<br>";
            }
            if(empty($date_in)){
                $msg .= "Date In Is Empty!<br>";
            }
            if($date_now->format('Y-m-d') > $date_in && !empty($date_in)){
                $msg .= "Day Selected Is Gone!<br>";
            }
            if($hotel == '..'){
                $msg .= "Hotel Is Empty!<br>";
            }
            if($nights == '..'){
                $msg .= "Night Is Empty!<br>";
            }
          
        }
        /** if the message empty its like mean we don't 
         * have error then add message success and redirect to content page 
         * */
        if(empty($msg)){

            

            /****** Query to Insert hotel reservation Form Database  ****** */
            $inserted = DataBaseQuery::insertQuery('res_h','type,range_room,price,nights,date_in,hotel_id,status',"?,?,?,?,?,?,?",[$type,$range,$price,$nights,$date_in,$hotel,$status]);

            if($inserted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Hotel Reservation Add Successfully';
            header("location:?page=hotels&res");
            exit;
            }

        }
    }
?>


<!-- Start Header Add Hotel Reservation  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Add Hotel Reservation</h1>
        </div>
        <?php if(!empty($msg)){ ?>
            <div class="alert alert-danger w-100" role="alert">
                <?php echo $msg; ?>
            </div>
        <?php } ?>
    </div>
<!-- End Header Add Hotel Reservation -->

<div class="row py-3"></div>


<!-- Start Content Add Hotel Reservation -->
    <div class="row pb-2">
        <form class="bg-dark p-3 rounded" action="?page=hotels&add_res" method="POST">
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="inputcountry" class="form-label  text-white">Type Room</label>
                    <select class="form-select"  name="type" aria-label="Default select example" id="inputcountry">
                        <option selected value="..">...</option>
                        <?php for($i = 0 ; $i < 3 ;$i++ ){ 
                            echo "<option value=".$i.">".$type_room[$i]."</option>";
                        } ?>
                    </select>
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="inputcountry" class="form-label  text-white">Range Room As Person</label>
                    <select class="form-select"  name="range_room" aria-label="Default select example" id="inputcountry">
                        <option selected value="..">...</option>
                        <?php for($i = 1 ; $i <= 4 ;$i++ ){ 
                            echo "<option value=".$i.">".$i."</option>";
                        } ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="date" class="form-label text-white">Date In</label>
                    <input type="date" class="form-control" name="date_in" id="date" aria-describedby="">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="inputcountry" class="form-label  text-white">Hotel Name</label>
                    <select class="form-select"  name="hotel_id" aria-label="Default select example" id="inputcountry">
                        <option selected value="..">...</option>
                        <?php foreach($hotels as $hotel){ 
                            echo "<option value=".$hotel['id'].">".strtoupper($hotel['name_en'])."</option>";
                        } ?>
                    </select>
                </div>      
            </div>
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="inputcountry" class="form-label  text-white">Nights</label>
                    <select class="form-select"  name="nights" aria-label="Default select example" id="inputcountry">
                        <option selected value="..">...</option>
                        <?php for($i = 1 ; $i <= 5 ;$i++ ){ 
                            echo "<option value=".$i.">".$i."</option>";
                        } ?>
                    </select>
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="price" class="form-label text-white">Price</label>
                    <input type="number" class="form-control" name="price" id="price" aria-describedby="">
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="status" value="1" id="exampleCheck1">
                <label class="form-check-label text-white" for="exampleCheck1">Status</label>
            </div>
            <button type="submit" class="btn btn-primary" name="add_hotel_res">Add Resrvation</button>
        </form>
    </div>
    <div class="mt-5">
        <a href="?page=hotels&res" class="btn btn-info"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
    </div>
<!-- End Content Add Reservation  -->