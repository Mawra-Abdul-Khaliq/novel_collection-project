<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

 <?php 
    include("php/config.php");
    if(isset($_POST['submit'])){
      $email = $_POST['Email'];
      $password = $_POST['password'];

      $result = mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND password='$password' ") or die("Select Error");
      $row = mysqli_fetch_assoc($result);

      if(is_array($row) && !empty($row)){
          $_SESSION['email'] = $row['email'];
          $_SESSION['username'] = $row['username'];
      }else{
          echo "<div class='message' style='color: white; margin-top:80px;'>
            <h3>Wrong Username or Password</h3>
             </div> <br>";
         echo "<a href='login.php'><button class='btn' style='margin-top:150px;color: blue; padding:6px;margin-left:-150px '>Go Back</button>";

      }
      if(isset($_SESSION['email'])){
          header("Location: homepage.php");
      }
    }else{

  ?>
    <div>
   
    <h2>Login</h2>
    <form class="register_style" action="" method="post">
    
    <label for="email">Email</label><br>
    <input type="email" name="Email" pattern="^[a-zA-Z0-9._%+-]+@gmail\.com$" required><br>
  
    <label for="password">Password</label><br>
    <input type="text" name="password" minlength="7" required><br>
    
    <input type="submit" style="margin-top: 4%; width:270px;
    padding: 7px;background: linear-gradient(to right , rgb(242, 240, 244), rgb(1, 84, 120)) ;
    color: #fff;border-radius: 3px;
    font-size: medium;
    border-style: none;"class="btn" name="submit" value="Login" required><br>
    <br>
    Don't have an account: <a href="register.php">Sign up now</a>
</form>
</div>
<?php } ?>

</body>
</html>


