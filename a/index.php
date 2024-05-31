<?php
session_start();
include('functions.php');
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user_name = $_POST['username'];
  $password = $_POST['password'];

  if (!empty($user_name) && !empty($password)) {
    
      $user_name = mysqli_real_escape_string($conn, $user_name);
      $password = mysqli_real_escape_string($conn, $password);

      $query = "SELECT * FROM users WHERE user_name = '$user_name'";
      $result = mysqli_query($conn, $query);

      if ($result && mysqli_num_rows($result) > 0) {
          $user_data = mysqli_fetch_assoc($result);

          if (password_verify($password, $user_data['password'])) {
              
              $_SESSION['user_id'] = $user_data['user_id'];
              $_SESSION['user_name'] = $user_data['user_name'];
              header('Location: dashboard/index.php');
              exit;
          } else {
             
              echo "Incorrect password!";
          }
      } else {
         
          echo "User not found!";
      }
  } else {
      
      echo "Please enter username and password!";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link rel="icon" href="assets/img/car.ico" type="image/x-icon">
  <title>AutoLogin</title>
  <link rel="stylesheet" href="assets/css/style1.css">
</head>
<body>
  <!-- Login Form Wrapper -->
  <div class="wrapper" title="Login Form">
    <!-- Title -->
    <div class="title" title="Auto Performance Website">
      AutoPerformance
    </div>
    <!-- Login Form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <!-- Email Field -->
      <div class="field" title="Enter your email address">
        <input type="text" name="username" required>
        <label>Email Address</label>
      </div>
      <!-- Password Field -->
      <div class="field" title="Enter your password">
        <input type="password" name="password" required>
        <label>Password</label>
      </div>
      <div class="content">
        <!-- Remember Me Checkbox -->
        <div class="checkbox" title="Remember me">
          <input type="checkbox" id="remember-me">
          <label for="remember-me">Remember me</label>
        </div>
        <!-- Forgot Password Link -->
        <div class="pass-link">
          <a href="#" title="Forgot your password?">Forgot password?</a>
        </div>
      </div>
      <!-- Login Button -->
      <div class="field">
        <input type="submit" class="button" title="Click to login"></button>
      </div>
      <!-- Signup Link -->
      <div class="signup-link" title="Not a member?">
        Not a member? <a href="signup.php">Signup now</a>
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
