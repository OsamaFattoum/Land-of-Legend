<?php



 if(!empty($_SESSION['msg'])){
        echo '  <div class="alert alert-success w-100" role="alert">'.$_SESSION['msg'].'</div>';
        $_SESSION['msg'] = '';
 }




?>