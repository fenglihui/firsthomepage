<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/7
 * Time: 15:57
 */
header("Content-Type:text/html; charset=utf8");
$n="true";
$email=isset($_POST["email"])?$_POST["email"]:false;
$con=mysqli_connect("localhost","root","","homepage","3306");
if(!$con){
    die('could not connect:'.mysqli_error());
}
$result=mysqli_query($con,"select * from username");
while($row = mysqli_fetch_array($result)){
    if($row["username"]==$email){
        $n="false";
        break;
    }
    else{
        $n="true";
    }
}
if($n=="false"){
    echo "用户名已存在";
}
else if($n=="true"){
    echo "用户名可用";
}
mysqli_close($con);
