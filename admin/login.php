<?php

$title = "Login";
$basename = 'Login';
$msg = '';

include_once "Template/includes/header_includes.php";


/*--------------------Section To Check If Users Is Admin-------------------------*/

/****If admin is Logged in it will redirect dashboard page****/
if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_id"])){
    
    header("location:Home.php");
    exit();

}

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    /** Query To check if the inputs true in database */
    $info = DataBaseQuery::selectOneQuery('*','users','WHERE email = ? AND password = ? AND is_admin = 1',[$email,sha1($password)]);
   
    if($info){
        /** if the query true will be add info user in  session and redirect to dashboard */
        $_SESSION['admin_id'] = $info['id'];
        $_SESSION['admin_name'] = $info['name'];

        header("location:index.php");
        exit;

    }else{
         /** if the query false will be add error msg and show */
        if(empty($email)){
            $msg ="Email Field Is Empty!";
        }
        if(empty($password)){
            $msg = "Password Field Is Empty!";
        }
        if(empty($email) && empty($password)){
            $msg = "Email And Password Field Is Empty!";
        }
        
        if(empty($msg)){
            $msg = "You Are Not Admin!";
        }


    }
}

?>





<!-- Start Login Form -->
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 pt-5 ms-xl-4 w-100  d-flex  flex-column justify-content-lg-center justify-content-center   align-items-start">
          <img src="Layout/images/logo.png" alt="" class="w-75 h-75">
          <?php if(!empty($msg)){ ?>
          <div class="alert alert-danger w-100" role="alert">
               <?php echo $msg; ?>
          </div>
          <?php } ?>
        </div>
       
        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-4 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" action="login.php" method="POST">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Admin Log in</h3>

            <div class="form-outline mb-4">
              <input type="email" id="form2Example18" class="form-control form-control-lg" name='email' />
              <label class="form-label" for="form2Example18">Email address</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" name='password' />
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-dark btn-lg btn-block" type="submit" name="login">Login</button>
            </div>
          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="Layout/images/img_login.jpg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
<!-- End Login Form -->













<?php

include_once "Template/includes/footer_includes.php";

?>