<?php
include('connection.php');
session_start();
// Prepare and bind the SQL statement 
$type=$_GET["type"];
$auth_id=$_GET["id"];
$name = $_POST['name'];  
$b_date=$_POST['b_date'];
$d_date=$_POST['d_date'];
$about=$_POST['about'];
$lang=$_POST['languages'];
$user_id=$_SESSION["id"];

if($type==="edit")
{
    $sql="UPDATE `autori` SET `name`='$name',`b_date`='$b_date',`d_date`='$d_date',`about`='$about', `lang_id`='$lang[0]' WHERE `id`=$auth_id";
}
else
{
    $sql="INSERT INTO `autori`(`lang_id`, `name`, `b_date`, `d_date`, `about`) VALUES ('$lang[0]','$name','$b_date','$d_date','$about')";
}
$result = mysqli_query($conn, $sql);
if($result===TRUE)
{
    echo $type."<br>".$sql."<br>";
    echo "Update succesfull";
    sleep(3);
    if($type=="add")
    {
        $sql2="INSERT INTO `logs`(`action_type`, `location`, `action`, `lang`, `user_id`) VALUES ('$type','Authors','$name','$lang[0]','$user_id')";
        $result2 = mysqli_query($conn, $sql2);
        if($result2===TRUE){
            header("location:authors.php");
        }
    }
    else
    {
        $sql2="INSERT INTO `logs`(`action_type`, `location`, `action`, `lang`, `user_id`) VALUES ('$type','Authors','$name','$lang[0]','$user_id')";
        $result2 = mysqli_query($conn, $sql2);
        if($result2===TRUE){
            header("location:auth.php?id=$auth_id");
        }
    }
    
}
?>