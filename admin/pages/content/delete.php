<?php

if(isset($_GET['delete'])){
 

    $id = $_GET['delete'];
    //cheak if id exist in database
    $row = DataBaseQuery::rowSelected('id','content','WHERE id = ?',[$id]);

    if($row > 0 ){

        /****** Query Delete Content Form Database  ****** */
        $row_deleted = DataBaseQuery::deleteQuery('content','WHERE id = ?',[$id]);

        if($row_deleted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Content Delete Successfully';
            header("location:?page=content");
            exit();
            
        }

    }else{
        $_SESSION['type'] = 'danger';
        $_SESSION['msg'] = 'This Content Doesn\'t Exist';
        header("location:?page=content");
        exit();
    }


}
