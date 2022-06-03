<?php



 if(!empty($_SESSION['msg'])){
        echo '  <div class="alert alert-'.$_SESSION['type'].' w-100" role="alert">'.$_SESSION['msg'].'</div>';
        $_SESSION['msg'] = '';
        $_SESSION['type'] = '';
 }




?>