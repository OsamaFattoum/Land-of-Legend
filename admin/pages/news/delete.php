<?php

if(isset($_GET['delete'])){
 

    $id = $_GET['delete'];
    //cheak if id exist in database
    $row = DataBaseQuery::rowSelected('id','news','WHERE id = ?',[$id]);

    if($row > 0 ){

        /****** Query Delete News Form Database  ****** */
        $row_deleted = DataBaseQuery::deleteQuery('news','WHERE id = ?',[$id]);

        if($row_deleted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'New Delete Successfully';
            header("location:?page=news");
            exit();
            
        }

    }else{
        $_SESSION['type'] = 'danger';
        $_SESSION['msg'] = 'This New Doesn\'t Exist';
        header("location:?page=news");
        exit();
    }


}
