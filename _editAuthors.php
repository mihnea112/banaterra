<?php
include('connection.php');
// Prepare and bind the SQL statement 
$type=$_GET["type"];
$auth_id=$_GET["id"];
$name = $_POST['name'];  
$b_date=$_POST['b_date'];
$d_date=$_POST['d_date'];
$about=$_POST['about'];
$lang=$_POST['languages'];

if($type==="edit")
{
    $sql="UPDATE `autori` SET `name`='$name',`b_date`='$b_date',`d_date`='$d_date',`about`='$about', `lang_id`='$lang' WHERE `id`=$auth_id";
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
    if($type="add")
    {
        header("location:authors.php");
    }
    else
    {
        header("location:auth.php?id=$auth_id");
    }
    
}
?>