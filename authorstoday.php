<?php
include 'connection.php';
$date=date('m-d');
$author_bd = $conn->query("SELECT name, id, cnt
FROM autori
WHERE b_date LIKE '%%-$date' AND active = '1'");

$author_dd = $conn->query("SELECT name, id, cnt
FROM autori
WHERE d_date LIKE '%%-$date' AND active = '1'");

?>