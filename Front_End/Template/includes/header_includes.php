<?php

include_once "Front_End/Helpers/config.php";


include_once "Front_End/Helpers/functions.php";





session_start();

if (!isset($_SESSION['lang'])) {

    $_SESSION['lang'] = DEFAULT_LANG;
}


extract(translateLanguages($basename));





include_once ROOT_FILE . "/Template/structure/header.php";




include_once "navbar.php";
