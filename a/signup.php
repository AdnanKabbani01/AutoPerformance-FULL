<?php
session_start();
include("connection.php");
include("functions.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['username'], $_POST['password'], $_POST['confirm_password'])) {
        $user_name = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];


        if ($password === $confirm_password) {

            $user_name = mysqli_real_escape_string($conn, $user_name);
            $password = mysqli_real_escape_string($conn, $password);

            $user_id = random_num(20);

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users (user_id, user_name, password) VALUES ('$user_id', '$user_name', '$hashed_password')";
            mysqli_query($conn, $query);

            header("Location: index.php");
            exit;
        } else {
            echo "Passwords do not match!";
        }
    } else {
        echo "All fields are required!";
    }
}

if (isset($_COOKIE['user'])) {
    header('Location: dashboard/index.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link rel="icon" href="assets/img/car.ico" type="image/x-icon">
  <title>AutoLogin - Sign Up</title>
  <link rel="stylesheet" href="assets/css/style1.css">
</head>
<body>

  <div class="wrapper" title="Sign Up Form">

    <div class="title" title="Auto Performance Website">
      AutoPerformance
    </div>

    <form method="post">

      <div class="field" title="Enter your email address">
        <input type="text" name="username" required>
        <label>Email Address</label>
      </div>
  
      <div class="field" title="Enter your password">
        <input type="password" name="password" required>
        <label>Password</label>
      </div>
     
      <div class="field" title="Confirm your password">
        <input type="password" name="confirm_password" required>
        <label>Confirm Password</label>
      </div>
  
      <div class="field">
        <input type="submit" class="button" title="Click to sign up"></button>
      </div>

      <div class="signup-link" title="Already a member?">
        Already a member? <a href="index.php">Login now</a>
      </div>
    </form>
  </div>
  <script>
    window.onload = function() {
        if (window.innerWidth <= 600) {
            document.querySelector('.wrapper').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    };
  </script>
</body>
</html>
