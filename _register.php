<?php      
    include('connection.php');
    // Prepare and bind the SQL statement 
    $email = $_POST['email'];  
    $password = $_POST['password'];  
    $password_conf = $_POST['password-conf'];
    $gender= $_POST['gender']; 
    $date=$_POST['date'];
    $lang= $_POST['languages'];
    $lang=$lang[0];
    //to prevent from mysqli injection  
        $username=stripcslashes($username);  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $password_conf = stripcslashes($password_conf);
        if($password != $password_conf){
                $confirm_password_err = "Password did not match.";
                echo $confirm_password_err;
        }
        if(empty($confirm_password_err)){
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            echo $param_password;
            $sql="INSERT INTO user (email, password, gender, b_date, lang_id) VALUES (?,?,?,?,?)";
            $stmt=mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt,"sssss", $email, $param_password, $gender, $date, $lang);
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
?>  