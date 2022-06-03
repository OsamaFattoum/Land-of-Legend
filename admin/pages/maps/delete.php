<?php

if(isset($_GET['delete'])){
 

    $id = $_GET['delete'];
    //cheak if id exist in database
    $row = DataBaseQuery::rowSelected('id','maps','WHERE id = ?',[$id]);

    if($row > 0 ){

        /****** Query Delete Map Form Database  ****** */
        $row_deleted = DataBaseQuery::deleteQuery('maps','WHERE id = ?',[$id]);

        if($row_deleted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Map Delete Successfully';
            header("location:?page=maps");
            exit();
            
        }

    }else{
        $_SESSION['type'] = 'danger';
        $_SESSION['msg'] = 'This Map Doesn\'t Exist';
        header("location:?page=maps");
        exit();
    }


}
