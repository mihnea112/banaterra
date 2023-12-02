<?php      
    include('connection.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from user where email = '$email'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){
            if(password_verify($password, $row["password"])){
            header("location:account.php")  ;
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $row["email"];
            $_SESSION["id"]=$row["id"];
            $_SESSION["lang"] = $row["lang_id"];
            $_SESSION["role"] = $row["role"];
            }    
            else{
                echo "<h1> Login failed. Invalid password.</h1>";
            }            
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  