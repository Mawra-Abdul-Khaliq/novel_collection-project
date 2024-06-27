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
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT email FROM users WHERE email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message' style='color: white; margin-top:80px;'>
                      <h3>This email is used, Try another One Please!</h3>
                  </div> <br>";
            echo "<a href='register.php'><button class='btn' style='margin-top:150px;color:  rgb(17, 187, 218); padding:6px;margin-left:-200px '>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(username,email,age,password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");
            header("Location:login.php");
            exit;
         

         }

         }else{
         
        ?>
    <div>
    <h2>REGISTRATION</h2>
    <form class="register_style" action="" method="post">
    <label for="username">Username</label><br>
    <input type="text" name="username" required><br>
    <label for="email">Email</label><br>
    <input type="text" name="email" required><br>
    <label for="age">Age</label><br>
    <input type="text" name="age" required><br>
    <label for="password">Password</label><br>
    <input type="text" name="password" required><br>
    <input type="submit" style=" margin-top: 4%;
    width:270px; padding: 7px; background: linear-gradient(to right , rgb(242, 240, 244), rgb(1, 84, 120)) ;
    color: #fff; border-radius: 3px; font-size: medium; " class="btn" name="submit" value="Register" required><br><br>
    Already a member: <a href="login.php">Sign In</a>
</form>
</div>
<?php } ?>

</body>
</html>