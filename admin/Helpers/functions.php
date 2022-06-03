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

// Function Save Photo 

function saveImage($file){

    if (($file['name'] != "")){

            // Where the file is going to be stored
            $target_dir = ROOT_FILE . "Layout\images\upload\\";
            $temp_name = $file['tmp_name'];
            $file = $file['name'];
            $path = pathinfo($file);
            $ext = $path['extension'];
            $filename = time() . '.' . $ext;
            $path_file = $target_dir.$filename;
            
            move_uploaded_file($temp_name,$path_file);
            return $filename;
    }


}








?>