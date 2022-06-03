<?php

if(isset($_GET['delete'])){
 

    $id = $_GET['delete'];
    //cheak if id exist in database
    $row = DataBaseQuery::rowSelected('id','cities','WHERE id = ?',[$id]);

    if($row > 0 ){

        /****** Query Delete City Form Database  ****** */
        $row_deleted = DataBaseQuery::deleteQuery('cities','WHERE id = ?',[$id]);

        if($row_deleted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'City Delete Successfully';
            header("location:?page=cities");
            exit();
            
        }

    }else{
        $_SESSION['type'] = 'danger';
        $_SESSION['msg'] = 'This City Doesn\'t Exist';
        header("location:?page=cities");
        exit();
    }


}
