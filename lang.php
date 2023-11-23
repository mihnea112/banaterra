<?php
include 'connection.php';
$sql = "SELECT * FROM `lang` WHERE `active`=\"1\";";
$result = mysqli_query($conn, $sql);
if(!mysqli_num_rows($result) > 0)
{
    echo mysqli_connect_error;
}

?>