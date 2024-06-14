<?php
include 'connect.php';
session_start();

if (isset($_POST['signUpBtn'])) {
    $FirstName = $_POST['firstname'];
    $LastName = $_POST['lastname'];
    $Username = $_POST['username'];
    $Email = $_POST['email'];
    $Password = $_POST['createPassword'];
    $PasswordEnc = md5($Password);

    // Corrected SQL query to check for existing email
    $checkEmail = "SELECT * FROM user_table WHERE email_adress = '$Email'";
    $results = $conn->query($checkEmail);

    if ($results->num_rows > 0) {
        echo 'Email already exists!';
    } else {
        // Corrected SQL query to insert new user
        $insertQuery = "INSERT INTO user_table (user_id, first_name, surname, username, email_adress, password, user_type)
                        VALUES (NULL, '$FirstName', '$LastName', '$Username', '$Email', '$PasswordEnc', '2')";

        if ($conn->query($insertQuery) === TRUE) {
            header('Location: LogIn.php');
        } else {
            echo 'Error: ' . $conn->error;
        }
    }
    exit();
}

if (isset($_POST['loginBtn'])) {
    $Email = $_POST['email'];
    $Password = $_POST['password']; // Corrected to use the correct field name
    $PasswordEnc = md5($Password);
    // Corrected SQL query to verify login credentials
    $sql = "SELECT * FROM user_table WHERE email_adress = '$Email' AND password = '$PasswordEnc'";
    $results = $conn->query($sql);

    if ($results->num_rows > 0) {
        $row = $results->fetch_assoc();
        $_SESSION['email'] = $row['email_adress']; // Corrected to match column name
    } else {
        echo 'Invalid login credentials';
    }
    exit();
}
?>
