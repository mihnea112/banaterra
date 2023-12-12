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
$role=$_SESSION["role"];
if($role=="0" && $type==="add")
{
    $act="1";
    $stat="online";
    $sql="INSERT INTO `autori`(`lang_id`, `name`, `b_date`, `d_date`, `about`,`active`) VALUES ('$lang[0]','$name','$b_date','$d_date','$about','$act')";
}
else if($role=="0")
{
    $act="1";
    $stat="online";
    $sql="UPDATE `autori` SET `name`='$name',`b_date`='$b_date',`d_date`='$d_date',`about`='$about', `lang_id`='$lang[0]' WHERE `id`=$auth_id";
}
else
{
    $act="0";
    $stat="qued";
    $sql="INSERT INTO `autori`(`lang_id`, `name`, `b_date`, `d_date`, `about`,`active`) VALUES ('$lang[0]','$name','$b_date','$d_date','$about','$act')";
}


$result = mysqli_query($conn, $sql);
if($result===TRUE)
{
    $new_id = $conn->insert_id;
    $sqlr="INSERT INTO `requests`(`status`, `action_type`, `modify_type`, `old_id`, `new_id`, `user_id`) VALUES ('$stat','$type','autori','$auth_id','$new_id','$user_id')";
    $resultr = mysqli_query($conn, $sqlr);
    if($result===TRUE)
    {
            header("location:authors.php");
    }
    else
    {
            header("location:auth.php?id=$auth_id");
    }
    
}
?>