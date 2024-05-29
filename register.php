<?php
include ("connect.php");

if(isset($_POST['signup'])){
    $firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $checkEmail ="SELECT * FROM users WHERE Email='$email'";
    $result =$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email Address Already Exists !";
    }
    else{
            $insertQuery = "INSERT INTO users(FristName,LastName,Email,Password)
                            VALUES('$firstName','$lastName','$email','$password')";
                if ($conn->query($insertQuery)==TRUE){
                        header("location: login.php");
                }
                else{
                    echo "error: ".$conn->error;
                }
    }
}

if (isset($_POST['signin'])){
    $email =$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location: home.php");
        exit();

    }
    else{
        echo "Not Found, Incorrect email or password";
    }
}




?>