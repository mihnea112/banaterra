<?php
include('connection.php');
// Prepare and bind the SQL statement 
$type=$_GET["type"];
$user_id=$_GET["id"];
$email = $_POST['email'];  
$lang=$_POST['languages'];
$role=$_POST['role'];
if($role==NULL)
{
    $role[0]=0;
}
if($type==="edit")
{
    $sql="UPDATE `user` SET `email`='$email',`lang_id`='$lang[0]',`role`='$role[0]' WHERE `id`=$user_id";
}
$result = mysqli_query($conn, $sql);
if($result===TRUE)
{
    echo $type."<br>".$sql."<br>";
    echo "Update succesfull";
    header("location:users.php");
    
}
?>