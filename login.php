<?php
session_start();
require 'config.php';

if(isset($_POST["login"])){

    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$usernameemail' OR email='$usernameemail'");

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_assoc($result);

        if($password == $row["password"]){

            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];

            echo "<script>alert('Login Successful');</script>";

        } else {
            echo "<script>alert('Wrong Password');</script>";
        }

    } else {
        echo "<script>alert('User Not Registered');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="post">

    <label>Username or Email:</label>
    <input type="text" name="usernameemail" required>
    <br><br>

    <label>Password:</label>
    <input type="password" name="password" required>
    <br><br>

    <button type="submit" name="login">Login</button>

</form>

</body>
</html>