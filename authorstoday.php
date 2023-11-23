<?php
include 'connection.php';
$date=date('m-d');
$author_bd = $conn->query("SELECT name, id, cnt
FROM autori
WHERE b_date LIKE '%%-$date' AND active = '1'");

$author_dd = $conn->query("SELECT name, id, cnt
FROM autori
WHERE d_date LIKE '%%-$date' AND active = '1'");

if(!mysqli_num_rows($author_bd) > 0 )
{
    echo mysqli_connect_error;
}
?>