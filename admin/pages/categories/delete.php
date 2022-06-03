<?php

if(isset($_GET['delete'])){
 

    $id = $_GET['delete'];
    //cheak if id exist in database
    $row = DataBaseQuery::rowSelected('id','categorys','WHERE id = ?',[$id]);

    if($row > 0 ){

        /****** Query Delete Category Form Database  ****** */
        $row_deleted = DataBaseQuery::deleteQuery('categorys','WHERE id = ?',[$id]);

        if($row_deleted > 0){
            $_SESSION['type'] = 'success';
            $_SESSION['msg'] = 'Category Delete Successfully';
            header("location:?page=categories");
            exit();
            
        }

    }else{
        $_SESSION['type'] = 'danger';
        $_SESSION['msg'] = 'This Category Doesn\'t Exist';
        header("location:?page=categories");
        exit();
    }


}
