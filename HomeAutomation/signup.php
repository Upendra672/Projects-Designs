<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include './partials/_dbconnnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists=false;

    $existsql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existsql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows>0){
        $showError = "Username Already exists";
        // $exists = true;
    }
    else{
        // $exists = false;
        if(($password == $cpassword)){
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `username`, `password`, `date`) VALUES ('$username', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }

}
    
?>

<!-- new  -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <link rel="stylesheet" href="./Styles/login.css" />
  </head>
  <body>

  <?php
    if($showAlert){
    echo ' <p class="text-light"> Sigunup completed successfully. You can login now<p> ';
    }
    if($showError){
    echo $showError;
    }
    ?>

    
    <div class="background">
      <div class="shape"></div>
      <div class="shape"></div>
    </div>
    <form action="signup.php" method="post">
      <h3>Sign Up Here</h3>

      <label for="username">Username</label>
      <input type="text" maxlength="11" placeholder="Username " name="username"  id="username" required/>

      <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password"  id="password" required/>
    
        <label for="repeatPassword"><b>confrim Password</b></label>
        <input type="password" placeholder="confrim Password" name="cpassword"  id="cpassword" required/>
        
        <p>
            Press to <a href="./login.php">SignIn</a> 
        </p>
      <button type="submit" class="signup">Sign Up</button>
    </form>
  </body>
</html>


