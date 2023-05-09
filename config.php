<?php

function d($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var){
   d($var);
   die();
}
$webroot = "http://campus_canteen.test".DIRECTORY_SEPARATOR;
$docroot = $_SERVER['DOCUMENT_ROOT'];
$partials = $docroot.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR . 'partials'. DIRECTORY_SEPARATOR;
$partials_frontend = $docroot.DIRECTORY_SEPARATOR.'canteen-frontend'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;