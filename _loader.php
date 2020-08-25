<?php
$url =  $_SERVER['REQUEST_URI'];  
$url = explode('/',$url);

#Change Starter URL/Folder on each project
$starterUrl = 'php-template';

#Check Url
if($url[count($url)-2]==$starterUrl){
    $dotdot = '';
}else{
    $dotdot = '../';
}

#Load Configuration
require_once $dotdot.'app/config/config.php';

#Load Helpers
require_once $dotdot.'app/helpers/database-helper.php';
require_once $dotdot.'app/helpers/helper.php';