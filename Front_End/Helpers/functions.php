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
        return "Front_End\Layout\\". $ex ."\\" .strtoLower($file).".$ex";
    }

}

//Function can be fetch languages and translate languages page 
function translateLanguages($basename){

   $array_lang =  include ROOT_FILE."\languages\\".$_SESSION['lang']."\\" . strtolower($basename) . ".php";

   return $array_lang;

}






?>