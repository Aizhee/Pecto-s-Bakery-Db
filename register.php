<?php
include 'connect.php';

if (isset($_POST['signUpBtn'])) {
    $FirstName = $_POST['firstname'];
    $LastName = $_POST['lastname'];
    $Username = $_POST['username'];
    $Email = $_POST['email'];
    $Password = $_POST['createPassword'];
    $Password = md5($Password);

    // Corrected SQL query to check for existing email
    $checkEmail = "SELECT * FROM user_table WHERE email_adress = '$Email'";
    $results = $conn->query($checkEmail);

    if ($results->num_rows > 0) {
        //using jquery to display error message
        echo "<script> alert('Email already exists!')</script>";
    } else {
        // Corrected SQL query to insert new user
        $insertQuery = "INSERT INTO user_table (user_id, first_name, surname, username, email_adress, password, user_type)
                        VALUES (NULL, '$FirstName', '$LastName', '$Username', '$Email', '$Password', '2')";

        if ($conn->query($insertQuery) === TRUE) {
            echo "New record created successfully";
            header("Location: LogIn.php");
            exit(); // Add exit after header redirection
        } else {
            // using jquery to display error message
            echo "<script> alert('Error: " . $conn->error . "')</script>";
        }
    }
}

if (isset($_POST['loginBtn'])) {
    $Email = $_POST['email'];
    $Password = $_POST['password']; // Corrected to use the correct field name
    $Password = md5($Password);
    // Corrected SQL query to verify login credentials
    $sql = "SELECT * FROM user_table WHERE email_adress = '$Email' AND password = '$Password'";
    $results = $conn->query($sql);

    echo $results->num_rows;
    echo $Password;

    if ($results->num_rows > 0) {
        session_start();
        $row = $results->fetch_assoc();
        // Store user ID in session
        $_SESSION['email'] = $row['email_adress']; // Corrected to match column name
        header("Location: index.php");
        exit(); // Add exit after header redirection
    } else {
        // using jquery to display error message
        echo "<script> alert('Invalid email or password!')</script>";
    }
}
?>