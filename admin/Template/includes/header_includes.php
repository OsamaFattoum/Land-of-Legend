<?php

include_once "Helpers/config.php";


include_once "Helpers/functions.php";

include_once 'Helpers/DataBaseQuery.php';

session_start();







include_once ROOT_FILE . "\Template\structure\header.php";


if(isset($navbar)){
include_once "navbar.php";
}