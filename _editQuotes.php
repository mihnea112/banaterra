<?php
include('connection.php');
session_start();
// Prepare and bind the SQL statement 
$type=$_GET["type"];
$quote_id=$_GET["id"];
$auth_id=$_GET["aId"];
$quote = $_POST['quote'];  
$lang=$_POST['languages'];
$tag=$_POST['tag'];
$user_id=$_SESSION["id"];
$role=$_SESSION["role"];
if($tag==NULL)
{
    $tag[0]=0;
}
if($role=="0" && $type==="add")
{
    $act="1";
    $stat="online";
    $sql="INSERT INTO `quotes`(`quote`, `tag_ids`, `aut_id`, `lang_id`, `user_id`) VALUES ('$quote','$tag[0]','$auth_id','$lang[0]','$user_id')";
}
else if($role=="0")
{
    $act="1";
    $stat="online";
    $sql="UPDATE `quotes` SET `quote`='$quote',`tag_ids`='$tag[0]',`aut_id`='$auth_id',`user_id`='$user_id', `lang_id`='$lang[0]' WHERE `id`=$quote_id";
}
else
{
    $act="0";
    $stat="qued";
    $sql="INSERT INTO `quotes`(`quote`, `tag_ids`, `aut_id`, `lang_id`, `user_id`) VALUES ('$quote','$tag[0]','$auth_id','$lang[0]','$user_id')";
}
$sql="INSERT INTO `quotes`(`quote`, `tag_ids`, `aut_id`, `lang_id`, `user_id`, `active`) VALUES ('$quote','$tag[0]','$auth_id','$lang[0]','$user_id','$act')";
$result = mysqli_query($conn, $sql);
if($result==TRUE)
{
    $new_id = $conn->insert_id;
    $sqlr="INSERT INTO `requests`(`status`, `action_type`, `modify_type`, `old_id`, `new_id`, `user_id`) VALUES ('$stat','$type','quotes','$quote_id','$new_id','$user_id')";
    $resultr = mysqli_query($conn, $sqlr);
    if($resultr===TRUE)
    {
        if($stat=="online" && $type=="add")
        {
            $sqlm="UPDATE `autori` SET cnt=cnt+1 WHERE `id`=$auth_id";
            $resultm=mysqli_query($conn, $sqlm);
        }
        header("location:auth.php?id=$auth_id");
    }
}
?>