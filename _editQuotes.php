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
if($type=="translate")
{
   $sqlq="SELECT `aut_id` FROM `quotes` WHERE `id`=10;";
   $resultq = mysqli_query($conn, $sqlq);
   $row3= mysqli_fetch_assoc($resultq);
   $auth_id=$row3["aut_id"];
}
if($tag==NULL)
{
    $tag[0]=0;
}
if($role=="0" && $type==="add")
{
    $act="1";
    $stat="online";
    $quote_id="0";
    $sql="INSERT INTO `quotes`(`quote`, `tag_ids`, `aut_id`, `lang_id`, `user_id`) VALUES ('$quote','$tag[0]','$auth_id','$lang[0]','$user_id')";
}
else if($role=="0" && $type=="translate")
{
    $act="1";
    $stat="online";
    $sql="INSERT INTO `quotes`(`quote`, `tag_ids`, `aut_id`, `lang_id`, `user_id`,`quote_dep`) VALUES ('$quote','$tag[0]','$auth_id','$lang[0]','$user_id','$quote_id')";
    $quote_id="0";
}
else if($type==="translate")
{
    $act="0";
    $stat="qued";
    $sql="INSERT INTO `quotes`(`quote`, `tag_ids`, `aut_id`, `lang_id`, `user_id`,`quote_dep`) VALUES ('$quote','$tag[0]','$auth_id','$lang[0]','$user_id','$quote_id')";
    $quote_id="0";
}
else if($role=="0" && $type=="edit")
{
    $act="1";
    $stat="online";
    $sql="INSERT INTO `quotes`(`quote`, `tag_ids`, `aut_id`, `lang_id`, `user_id`) VALUES ('$quote','$tag[0]','$auth_id','$lang[0]','$user_id')";
}
else
{
    $act="0";
    $stat="qued";
    $sql="INSERT INTO `quotes`(`quote`, `tag_ids`, `aut_id`, `lang_id`, `user_id`) VALUES ('$quote','$tag[0]','$auth_id','$lang[0]','$user_id')";
}
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
        if($type=="translate")
        {
            header("location:auth.php?id=$auth_id");
        }
        else
        {
            header("location:auth.php?id=$auth_id");
        }
    }
}
?>