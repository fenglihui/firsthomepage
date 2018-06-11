<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/6
 * Time: 15:09
 */
header("Content-Type:text/html; charset=utf8");
$your_name=isset($_POST["your_name"])?$_POST["your_name"]:false;
$email=isset($_POST["email"])?$_POST["email"]:false;
$password=isset($_POST["password"])?$_POST["password"]:false;
$second_password=isset($_POST["second_password"])?$_POST["second_password"]:false;
$con=mysqli_connect("localhost","root","","homepage","3306");
if(!$con){
    die('could not connect:'.mysqli_error());
}
$sql1="insert into username (username,password) values('$email','$password')";
$sql2="insert into other_name(other_username,username) values('$your_name','$email') ";
if(!mysqli_query($con,$sql1))
{
    die('Error: ' . mysqli_error($con));
}
else if(!mysqli_query($con,$sql2)){
    die('Error: '.mysqli_error($con));
}
else{
    echo "t";
}
mysqli_close($con);


