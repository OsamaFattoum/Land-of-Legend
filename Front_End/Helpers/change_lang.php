<?php

// session start 
session_start();


//check if have request and type the request is post and value of the post is english
if(isset($_POST['en'])){

    // if the post request equal default language return redirect back
    if($_POST['en'] == $_SESSION['lang']){

        header('location:' . $_SERVER['HTTP_REFERER']);
        exit();

    }
    //else change the language to default language and return redirect back
    else{

        $_SESSION['lang'] = $_POST['en'];
        header('location:' . $_SERVER['HTTP_REFERER']);
        exit();

    }


}


//check if have request and type the request is post and value of the post is arabic
if(isset($_POST['ar'])){

    // if the post request equal arabic language return redirect back
    if($_POST['ar'] == $_SESSION['lang']){

        header('location:' . $_SERVER['HTTP_REFERER']);
        exit();

    }
    //else change the language to arabic language and return redirect back
    else{

        $_SESSION['lang'] = $_POST['ar'];

        header('location:' . $_SERVER['HTTP_REFERER']);
        exit();

    }


}



?>