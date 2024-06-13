<?php

include 'connect.php';

if(isset($_POST['signUpBtn'])){

    $FirstName = $_POST['firstname'];
    $LastName = $_POST['lastname'];
    $Username = $_POST['username'];
    $Email = $_POST['email'];
    $Password = $_POST['createPassword'];
    $Password = md5($Password);

    $chechEmail = "SELECT from user_table where email_adress = '$Email'";
    $results = $conn->query($checkEmail);

    echo $results->num_rows;

    if($results->num_rows>0){
        echo "Email address already exists!";
    }else{
        $insertQuery = "INSERT INTO user_table(user_id, first_name, surname, username, email_adress, password, user_type)
                        VALUES (NULL, '$FirstName', '$LirstName', '$Username', '$Email', '$Password', '2')";

            if($conn->$insertQuery==TRUE){
                echo "New record created successfully";
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

    $sql = "SELECT from user_table WHERE email_adress = '$Email' and password='$Password'";
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