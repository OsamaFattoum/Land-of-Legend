<?php

if(isset($_GET['delete'])){
 

    $id = $_GET['delete'];
    //cheak if id exist in database
    $row = DataBaseQuery::rowSelected('id','users','WHERE id = ?',[$id]);

    if($row > 0 ){

        /****** Query Delete Users Form Database  ****** */
        $row_deleted = DataBaseQuery::deleteQuery('users','WHERE id = ?',[$id]);

        if($row_deleted > 0){
            $_SESSION['msg'] = 'User Delete Successfully';
            header("location:?page=users");
            exit();
            
        }

    }else{
        header("location:?page=users");
        exit();
    }


}








?>