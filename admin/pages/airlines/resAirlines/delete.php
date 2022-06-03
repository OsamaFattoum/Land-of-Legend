<?php

if(isset($_GET['delete_res'])){
 

    $id = $_GET['delete_res'];
    //cheak if id exist in database
    $row = DataBaseQuery::rowSelected('id','res_airline','WHERE id = ?',[$id]);

    if($row > 0 ){

        /****** Query Delete Airline Reservation Form Database  ****** */
        $row_deleted = DataBaseQuery::deleteQuery('res_airline','WHERE id = ?',[$id]);

        if($row_deleted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Airline Reservation Delete Successfully';
            header("location:?page=airlines&res");
            exit();
            
        }

    }else{
        $_SESSION['type'] = 'danger';
        $_SESSION['msg'] = 'This Reservation Doesn\'t Exist';
        header("location:?page=airlines&res");
        exit();
    }


}
