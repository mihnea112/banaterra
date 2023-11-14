<?php
//Connect To Database
$hostname='213.157.175.213:/var/lib/mysql/mysql.sock';
$username='banaterra';
$password='SCtXEzGN';
$dbname='banaterra';
$sock='/var/lib/mysql/mysql.sock';
$usertable='user';

$conn = new PDO('mysql:host=213.157.175.213:3306;dbname=banaterra', $username, $password);
// use the connection here
$sth = $dbh->query('SELECT * FROM user');

// and now we're done; close it
$sth = null;
$dbh = null;

?>