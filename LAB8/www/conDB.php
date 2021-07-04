<?php
$host = "db";
$user = "root";
$pass = "test";
$db = "class_room";

try{
    $mysqli = new mysqli($host,$user,$pass,$db);
    $mysqli->query("SET NAMES utf8");
}
catch(Exception $e){
    echo $e->getMessge();
    echo "Error !!!";
}