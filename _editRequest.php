<?php
include('connection.php');
session_start();
// Prepare and bind the SQL statement 
$type=$_GET["type"];
$req_id=$_GET["id"];
$loc=$_GET["loc"];
$stat=$_GET["stat"];
$sql = "SELECT * FROM requests WHERE id='$req_id'";
$resultsss = mysqli_query($conn, $sql);
$row= mysqli_fetch_assoc($resultsss);
$old=$row["old_id"];
$new=$row["new_id"];
$id=$row["id"];
if($stat=="apr")
{
    $status="online";
}
else{
    $status="denied";
}
if($type==="add" && $status=="online")
{
    $sqlu="UPDATE $loc SET active='1' WHERE id='$new'";
    $sqlr="UPDATE requests SET status='$status' WHERE id='$id'";
    if($loc=="quotes")
    {
        $sqlq = "SELECT * FROM quotes WHERE id='$new'";
        $resultq = mysqli_query($conn, $sqlq);
        $rowq= mysqli_fetch_assoc($resultq);
        $auth_id=$rowq["aut_id"];
        $sqlm="UPDATE `autori` SET cnt=cnt+1 WHERE `id`=$auth_id";
        $resultm=mysqli_query($conn, $sqlm);
    }
}
else if($type==="edit" && $status=="online")
{
    $sqlr="UPDATE requests SET status='$status' WHERE id='$id'";
    $old=$row["old_id"];
    $new=$row["new_id"];
    $sqln="SELECT * FROM $loc WHERE id='$new'";
    $resultn = mysqli_query($conn, $sqln);
    $rown= mysqli_fetch_assoc($resultn);
    if($loc=="autori")
    {
        $lang=$rown["lang_id"];
        $name=$rown["name"];
        $b_date=$rown["b_date"];
        $d_date=$rown["d_date"];
        $about=$rown["about"];
        $sqlu="UPDATE $loc SET lang_id='$lang', name='$name',b_date ='$b_date',d_date='$d_date',about='$about' WHERE id=$old";
    }
    else if($loc=="tag")
    {

    }
    else{
        $quote=$rown["quote"];
        $tag=$rown["tag_ids"];
        $aut_id=$rown["aut_id"];
        $lang_id=$rown["lang_id"];
        $user=$rown["user_id"];
        $dep=$rown["quote_dep"];
        $req=$rown["req_id"];
        $sqlu="UPDATE $loc SET quote='$quote', tag_ids='$tag', aut_id ='$aut_id',lang_id='$lang_id',user_id='$user',quote_dep='$dep',req_id='$req' WHERE id=$old";
    }
}
else{
    $sqlr="UPDATE requests SET status='$status' WHERE id='$id'";
    $sqlu=NULL;
}
if($sqlu==NULL)
{
    $resultr=mysqli_query($conn, $sqlr);
    if($resultr===TRUE)
    {
        header("location:requests.php");
    }
}
else
{
    $resultu=mysqli_query($conn, $sqlu);
    if($resultu===TRUE)
    {
        $resultr=mysqli_query($conn, $sqlr);
        if($resultr===TRUE)
        {
            header("location:requests.php");
        }
    }
    
}
?>