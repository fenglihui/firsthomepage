<?php
header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/17
 * Time: 15:39
 */
$username=$_POST["username"];
$password=$_POST["password"];
$n="f";
$con=mysqli_connect("localhost","root","","homepage","3306");
if(!$con){
    die('could not connect:'.mysqli_error());
}
$result=mysqli_query($con,"SELECT * FROM username");
    while($row=mysqli_fetch_array($result))
{
    if($row['username']==$username&&$row['password']==$password){
        setcookie('username',$row['username'],time()+1200,'/');
        $n="t";
    }
}
if($n=="t"){
        echo true;
}
else{
        echo false;
}
?>