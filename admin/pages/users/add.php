<?php
    /****** Query Get Users Country Form Database  ****** */
    $countries = DataBaseQuery::selectQuery('*','countries');


    if(isset($_POST['add_user'])){

        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $country = $_POST['country'];

        /** if the query false will be add error msg and show */
        if(empty($name) && empty($password) && empty($email) && $country == '..'){
            $msg .= "All Fields Is Empty!<br>";
        }else{
            if(empty($name)){
                $msg .="Username Field Is Empty!<br>";
            }
            if(filter_var($name,FILTER_SANITIZE_NUMBER_INT)){
                $msg .="Username Must be charactars !<br>";
            }
            if(empty($email)){
                $msg .="Email Field Is Empty!<br>";
            }
            if(strlen($password) < 6 && !empty($password)){
                $msg .= "Password must be bigger than 6 charactars!<br>";
            }
            if(empty($password)){
                $msg .= "Password Field Is Empty!<br>";
            }
            if($country == '..'){
                $msg .= "Country Is not Selected!<br>";
            }
        }
        /** if the message empty its like mean we don't 
         * have error then add message success and redirect to users page 
         * */
        if(empty($msg)){

            /****** Query to Insert User Form Database  ****** */
            $inserted = DataBaseQuery::insertQuery('users','name,email,password,country_id',"?,?,?,?",[$name,$email,sha1($password),$country],null,null);

            if($inserted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'User Add Successfully';
            header("location:?page=users");
            exit();
            }

        }
    }
?>



<!-- Start Header Add User  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Add User</h1>
        </div>
        <?php if(!empty($msg)){ ?>
            <div class="alert alert-danger w-100" role="alert">
                <?php echo $msg; ?>
            </div>
        <?php } ?>
    </div>
<!-- End Header Add User  -->

<div class="row py-3"></div>


<!-- Start Content Add User  -->
    <div class="row pb-2">
        <form class="bg-dark p-3 rounded" action="?page=users&add" method="POST">
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputusername" class="form-label text-white">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputusername" aria-describedby="usernameHelp">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    
                </div>
            </div>
            <div class="row">
                <div class="mb-3  col-lg-6">
                    <label for="inputPassword5" class="form-label  text-white">Password</label>
                    <input type="password"  name="password" name="username" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text">
                        Your password must be Minimum 6 characters long
                    </div>
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="inputcountry" class="form-label  text-white">Country</label>
                    <select class="form-select"  name="country" aria-label="Default select example" id="inputcountry">
                        <option selected value="..">...</option>
                        <?php foreach($countries as $country){ 
                            echo "<option value=".$country['id'].">".strtoupper($country['name'])."</option>";
                        } ?>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="add_user">Add User</button>
        </form>
    </div>
    <div class="mt-5">
        <a href="?page=users" class="btn btn-info"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
    </div>
<!-- End Content Add User  -->
