<?php
include('connection.php');
session_start();
// Prepare and bind the SQL statement 
$lang1=$_POST["select_lang1"];
$lang2=$_POST["select_lang2"];

$sqls="SELECT * FROM quotes WHERE lang_id = $lang1";
$results=mysqli_query($conn, $sqls);
$i=0;
while($rows= mysqli_fetch_assoc($results))
{
    $resultt=NULL;
    $quote_id=$rows["id"];
    $sqlt="SELECT * FROM quotes WHERE quote_dep = $quote_id AND lang_id=$lang2";
    $resultt=mysqli_query($conn, $sqlt);
    if(mysqli_num_rows($resultt)!=0)
    {
        while($rowt= mysqli_fetch_assoc($resultt))
        {
            $res[$i]["lang1"]=$rows["quote"];
            $res[$i]["lang2"]=$rowt["quote"];
            $res[$i]["id1"]=$rows["id"];
            $res[$i]["id2"]=$rowt["id"];
            $auth_ids=$rowt["aut_id"];
            $sqla="SELECT name FROM autori WHERE id='$auth_ids'";
            $resulta=mysqli_query($conn, $sqla);
            $rowa= mysqli_fetch_assoc($resulta);
            $res[$i]["auth"]=$rowa["name"];
            $i++;
        }
    }
}
$_SESSION["learn"]=$res;
header("location:learn.php")  ;
?>