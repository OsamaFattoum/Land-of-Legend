<?php 

//Funcation To Get Title Of any Page

function getTitle($title){

   if($title == ""){
       return "Default";
   }else{
       return $title;
   }

}

//Function get Css File And Js File

function getCssJS($file,$ex){

    if($file == ""){
        header("location: Error.php");
    }else{
        return "Layout\\". $ex ."\\" .strtoLower($file).".$ex";
    }

}








?>