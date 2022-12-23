<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include './partials/_dbconnnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    // $sql = "select * from users where username = '$username' AND password='$password'";
    $sql = "select * from users where username = '$username'";
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: welcome.php ");
            }else{
                $showError = "Invalid Credentials";
            }
        }
    }
}
    else{
        $showError = "Invalid Credentials";
    }

    
?>


<!-- new -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./Styles/login.css">
    <style>
        form button a {
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <?php
        if($login){
        echo ' <p class="text-light"> Signin completed successfully.<p>';
        }
        if($showError){
        echo  $showError;
        }
        ?>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="login.php" method="post">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="username" id="username" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <button type="submit">SignIn</button>
        <p>
            Click to register yourself <a href="./signup.php">SignUp</a> 
        </p>
    </form>
</body>
</html>