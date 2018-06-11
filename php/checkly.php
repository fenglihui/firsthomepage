<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/9
 * Time: 22:38
 */
header("content-type:text/html;charset=utf-8");
$username=$_COOKIE["username"];
$ly=$_GET["fans_ly"];
date_default_timezone_set("PRC");
$date=date("Y-m-d H:i:s");
$result0=array();
$con=mysqli_connect("localhost","root","","homepage","3306");
if(!$con){
    die('could not connect:'.mysqli_error());
}
$result1=mysqli_query($con,"INSERT INTO fans_speak(username,ly,`date`) values ('$username','$ly','$date')");
if(!$result1){
    die('Error: ' . mysqli_error($con));
    echo false;
}
else{
     echo true;
}
?>