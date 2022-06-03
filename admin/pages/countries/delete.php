<?php

if(isset($_GET['delete'])){
 

    $id = $_GET['delete'];
    //cheak if id exist in database
    $row = DataBaseQuery::rowSelected('id','countries','WHERE id = ?',[$id]);

    if($row > 0 ){

        /****** Query Delete countries Form Database  ****** */
        $row_deleted = DataBaseQuery::deleteQuery('countries','WHERE id = ?',[$id]);

        if($row_deleted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Country Delete Successfully';
            header("location:?page=countries");
            exit();
            
        }

    }else{
        $_SESSION['type'] = 'danger';
        $_SESSION['msg'] = 'This Country Doesn\'t Exist';
        header("location:?page=countries");
        exit();
    }


}
