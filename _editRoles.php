<?php
include('connection.php');
// Prepare and bind the SQL statement 
$type=$_GET["type"];
$role_id=$_GET["id"];
$name = $_POST['name'];  
$add=$_POST['add'];
$edit=$_POST['edit'];
$delete=$_POST['delete'];
$lang=$_POST['languages'];
$tag=$_POST['tag'];
if($add==NULL)
{
    $add=0;
}
if($edit==NULL)
{
    $edit=0;
}
if($delete==NULL)
{
    $delete=0;
}
if($tag==NULL)
{
    $tag[0]=0;
}
if($lang==NULL)
{
    $lang[0]=0;
}
echo var_dump($tag);
if($type==="edit")
{
    $sql="UPDATE `roles` SET `name`='$name',`edit`='$edit',`plus`='$add',`del`='$delete', `lang`='$lang[0]' ,`tag`='$tag[0]' WHERE `id`=$role_id";
}
else
{
    $sql="INSERT INTO `roles`(`name`, `edit`, `plus`, `del`, `lang`, `tag`) VALUES ('$name','$edit','$add','$delete','$lang[0]','$tag[0]')";
}
$result = mysqli_query($conn, $sql);
if($result===TRUE)
{
    echo $type."<br>".$sql."<br>";
    echo "Update succesfull";
    header("location:roles.php");
    
}
?>