<?php

$urlSegments = explode('/', $_SERVER["REQUEST_URI"]);
// print_r($urlSegments[2]);

$validSegments = ['submit','form'];

if(isset($urlSegments[2]) && in_array($urlSegments[2], $validSegments)){
    require_once "{$urlSegments[2]}.php";
}else{
    // require_once "form.php";
}