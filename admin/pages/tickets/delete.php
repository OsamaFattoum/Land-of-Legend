<?php

if(isset($_GET['delete'])){
 

    $id = $_GET['delete'];
    //cheak if id exist in database
    $row = DataBaseQuery::rowSelected('id','tickets','WHERE id = ?',[$id]);

    if($row > 0 ){

        /****** Query Delete Ticket Form Database  ****** */
        $row_deleted = DataBaseQuery::deleteQuery('tickets','WHERE id = ?',[$id]);

        if($row_deleted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Ticket Delete Successfully';
            header("location:?page=tickets");
            exit();
            
        }

    }else{
        $_SESSION['type'] = 'danger';
        $_SESSION['msg'] = 'This Ticket Doesn\'t Exist';
        header("location:?page=tickets");
        exit();
    }


}
