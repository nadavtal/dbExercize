<?php

$urlSegments = explode('/', $_SERVER["REQUEST_URI"]);

$validSegments = ['submit','form'];

if(isset($urlSegments[1]) && in_array($urlSegments[1], $validSegments)){
    require_once "{$urlSegments[1]}.php";
}else{
    require_once "form.php";
}