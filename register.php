<?php

include 'connect.php';

if(isset($_POST['signUpBtn'])){

    $FirstName = $_POST['firstname'];
    $LastName = $_POST['lastname'];
    $Username = $_POST['username'];
    $Email = $_POST['email'];
    $Password = $_POST['createPassword'];
    $Password = md5($Password);

    $chechEmail = "SELECT from users where email = '$Email'";
    $results = $conn->query($checkEmail);

    if($results->num_rows>0){
        echo "Email address already exists!";
    }else{
        $insertQuery = "INSERT INTO users(FirstName, LastName, Username, Email, Password)
                        VALUES ('$FirstName', '$LirstName', '$Username', '$Email', '$Password'";

            if($conn->$insertQuery==TRUE){
                header("location: LogIn.php");
            }else{
                echo "Error".$conn->error;
            }
    }
}

if(isset($_POST['loginBtn'])){
    $Email = $_POST['email'];
    $Password = $_POST['createPassword'];
    $Password = md5($Password);

    $sql = "SELECT from users WHERE email = '$Email' and password='$Password'";
    $results = $conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location:index.php");
        exit();
    }else{
        echo "Not Found, Incorrect Email or Password";
    }
}

?>