<?php
    if(isset($_GET['edit_res'])){

        
        $id = $_GET['edit_res'];
        
        /****** Query Get Airline Form Database  ****** */
        $airlines = DataBaseQuery::selectQuery('*','airlines');
        /****** Query Get Country Form Database  ****** */
        $countries = DataBaseQuery::selectQuery('*','countries');
        $type_seat = ['Premium Economy Class','Business Class','First-Class'];

        /****** Query cheak if id exist in database  ****** */
        $row = DataBaseQuery::rowSelected('id','res_airline','WHERE id = ?',[$id]);

    if($row > 0 ){
        /****** Query Get Airline Reservation Info Form Database  ****** */
        $res_airline = DataBaseQuery::selectOneQuery('*','res_airline','WHERE id=?',[$id]);
    
    if(isset($_POST['edit_airline_res'])){

       
        $type = $_POST['type'];
        $date_in = $_POST['date_in'];
        $date_out = $_POST['date_out'];
        $price = $_POST['price'];
        $airline = $_POST['airline_id'];
        $country = $_POST['country_res_id'];
        $date_now = new DateTime();

        /** if the query false will be add error msg and show */
        if($type == '..' && empty($date_in) && empty($date_out) && empty($price) && $airline == '..' && $country == '..'){
            $msg .= "All Fields Is Empty!<br>";
        }else{
            if($type == '..'){
                $msg .="Type Is Empty!<br>";
            }
            if($airline == '..'){
                $msg .="Airline Is Empty!<br>";
            }
            if(empty($price)){
                $msg .= "Price Is Empty!<br>";
            }
            if($price > 300){
                $msg .= "Price Is Excpinsive!<br>";
            }
            if(empty($date_in)){
                $msg .= "Date In Is Empty!<br>";
            }
            if($date_now->format('Y-m-d') > $date_in && !empty($date_in)){
                $msg .= "Day In  Selected Is Gone!<br>";
            }
            if(!empty($date_out) && $date_in > $date_out){
                $msg .= "Day Out Selected Is Before Date In !<br>";
            }
            if($country == '..'){
                $msg .= "Country Is Empty!<br>";
            }
          
        }
          
        /** if the message empty its like mean we don't 
         * have error then add message success and redirect to cities page 
         * */
        if(empty($msg)){

            /****** Query to Update Airline Reservation Form Database  ****** */
            $updated = DataBaseQuery::updateQuery('res_airline','type=?,date_in=?,date_out=?,price=?,airline_id=?,country_res_id=?',"WHERE id= $id",[$type,$date_in,$date_out,$price,$airline,$country]);
            if($updated > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Reservation Updated Successfully';
            header("location:?page=airlines&res");
            exit();
            }

        }
    }
?>


<!-- Start Header Edit Airline Reservation -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Edit Airline Reservation</h1>
        </div>
        <?php if(!empty($msg)){ ?>
            <div class="alert alert-danger w-100" role="alert">
                <?php echo $msg; ?>
            </div>
        <?php } ?>
    </div>
<!-- End Header Edit Airline Reservation  -->

<div class="row py-3"></div>


<!-- Start Content Edit Airline Reservation  -->
    <div class="row pb-2">
    <form class="bg-dark p-3 rounded" action="?page=airlines&edit_res=<?php echo $res_airline['id']?>" method="POST" enctype="multipart/form-data">
    <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="inputcountry" class="form-label  text-white">Type Airline Seat</label>
                    <select class="form-select"  name="type" aria-label="Default select example" id="inputcountry">
                        <option selected value="..">...</option>
                        <?php for($i = 0 ; $i < 3 ;$i++ ){ 
                            if($res_airline['type'] == $i){
                                echo "<option selected value=".$i.">".$type_seat[$i]."</option>";
                            }else{
                                echo "<option value=".$i.">".$type_seat[$i]."</option>";
                            }
                            
                        } ?>
                    </select>
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="price" class="form-label text-white">Price</label>
                    <input type="number" class="form-control" value="<?php echo $res_airline['price']?>"  name="price" id="price" aria-describedby="">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="date" class="form-label text-white">Date In</label>
                    <input type="date" class="form-control" value="<?php echo $res_airline['date_in']?>" name="date_in" id="date" aria-describedby="">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="date_out" class="form-label text-white">Date Out</label>
                    <input type="date" class="form-control" value="<?php echo $res_airline['date_out']?>" name="date_out" id="date_out" aria-describedby="">
                </div>
                
            </div>
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="inputcountry" class="form-label  text-white">Airline Name</label>
                    <select class="form-select"  name="airline_id" aria-label="Default select example" id="inputcountry">
                        <option selected value="..">...</option>
                        <?php foreach($airlines as $a){
                            if($res_airline['airline_id'] == $a['id']){
                                echo "<option selected value=".$a['id'].">".strtoupper($a['name_en'])."</option>";
                            }else{
                                echo "<option value=".$a['id'].">".strtoupper($a['name_en'])."</option>";
                            }
                            
                        } ?>
                    </select>
                </div>      
                <div class="mb-3 col-lg-6">
                    <label for="inputcountry" class="form-label  text-white">Country Name</label>
                    <select class="form-select"  name="country_res_id" aria-label="Default select example" id="inputcountry">
                        <option selected value="..">...</option>
                        <?php foreach($countries as $c){
                            if($res_airline['country_res_id'] == $c['id']){
                                echo "<option selected value=".$c['id'].">".strtoupper($c['name'])."</option>";
                            }else{
                                echo "<option value=".$c['id'].">".strtoupper($c['name'])."</option>";
                            }
                            
                        } ?>
                    </select>
                </div>      
            </div>
            <button type="submit" class="btn btn-primary" name="edit_airline_res">Edit Reservation</button>
        </form>
    </div>
    <div class="mt-5">
        <a href="?page=airlines&res" class="btn btn-info"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
    </div>
<!-- End Content Edit Airline Reservation  -->



<?php 
    }else{
            $_SESSION['type'] = 'danger';
            $_SESSION['msg'] = 'This Reservation Doesn\'t Exist';
            header("location:?page=airlines&res");
            exit();
        
    }
}
?>