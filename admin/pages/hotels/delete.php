<?php

if(isset($_GET['delete'])){
 

    $id = $_GET['delete'];
    //cheak if id exist in database
    $row = DataBaseQuery::rowSelected('id','hotels','WHERE id = ?',[$id]);

    if($row > 0 ){

        /****** Query Delete Hotel Form Database  ****** */
        $row_deleted = DataBaseQuery::deleteQuery('hotels','WHERE id = ?',[$id]);

        if($row_deleted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Hotel Delete Successfully';
            header("location:?page=hotels");
            exit();
            
        }

    }else{
        $_SESSION['type'] = 'danger';
        $_SESSION['msg'] = 'This Hotel Doesn\'t Exist';
        header("location:?page=hotels");
        exit();
    }


}
