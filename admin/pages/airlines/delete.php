<?php

if(isset($_GET['delete'])){
 

    $id = $_GET['delete'];
    //cheak if id exist in database
    $row = DataBaseQuery::rowSelected('id','airlines','WHERE id = ?',[$id]);

    if($row > 0 ){

        /****** Query Delete Airline Form Database  ****** */
        $row_deleted = DataBaseQuery::deleteQuery('airlines','WHERE id = ?',[$id]);

        if($row_deleted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Airline Delete Successfully';
            header("location:?page=airlines");
            exit();
            
        }

    }else{
        $_SESSION['type'] = 'danger';
        $_SESSION['msg'] = 'This Airline Doesn\'t Exist';
        header("location:?page=airlines");
        exit();
    }


}
