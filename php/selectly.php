<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/10
 * Time: 21:10
 */
header("content-type:text/json;charset=utf-8");
$result1=array();
$con=mysqli_connect("localhost","root","","homepage","3306");
if(!$con){
    die('could not connect:'.mysqli_error());
}
$result2=mysqli_query($con,"SELECT username,ly,`date` FROM fans_speak ORDER BY `date` ");
while($row=mysqli_fetch_assoc($result2)){
    $result1[]=$row;
}
if(!$result2){
    die('Error: ' . mysqli_error($con));
}
echo json_encode($result1);
?>