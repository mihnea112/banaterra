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
if($type==="edit")
{
    $sql="UPDATE `quotes` SET `quote`='$quote',`tag_ids`='$tag[0]',`aut_id`='$auth_id',`user_id`='$user_id', `lang_id`='$lang[0]' WHERE `id`=$quote_id";
    $result = mysqli_query($conn, $sql);
    echo $result;
    header("location:auth.php?id=$auth_id");
}
else
{
    $sql="UPDATE `autori` SET cnt=cnt+1 WHERE `id`=$auth_id";
    $sql2="INSERT INTO `quotes`(`quote`, `tag_ids`, `aut_id`, `lang_id`, `user_id`) VALUES ('$quote','$tag[0]','$auth_id','$lang[0]','$user_id')";
    $result2 = mysqli_query($conn, $sql2);
    if($result2===TRUE)
    {
        $result = mysqli_query($conn, $sql);
        echo $result;
        header("location:auth.php?id=$auth_id");
    }
}
?>