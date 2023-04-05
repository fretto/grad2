<!DOCTYPE html>
<html lang="en">
<?php  //366CC7 blue //dark gray 898C96 //grayADAEB3
    /*session_start();
    //connect to user database table
    $conn = mysqli_connect('localhost','root','','');
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        $username=mysqli_real_escape_string($conn,$username);
        $password=mysqli_real_escape_string($conn,$password);
    
        $query = "SELECT * FROM user WHERE username='{$username}' ";
        $userquery = mysqli_query($conn,$query);
        if(!$userquery){
            die("QUERY FAILED".mysqli_error($conn));
        } 
        while($row = mysqli_fetch_array($userquery)){
            $user_first_name = $row['firstname'];
            $user_last_name = $row['lastname'];
            $user_password = $row['password'];
            $user_email = $row['email'];
            $usernamee = $row['username'];
            if (password_verify($password, $user_password)){
                $_SESSION['username'] = $usernamee;
                $_SESSION['firstname'] = $user_first_name;
                $_SESSION['lastname'] = $user_last_name;
                $_SESSION['password'] = $user_password;
                $_SESSION['email'] = $user_email;
                header("Location: home.php");
            } 
            else{
                header("Location: signin.php");
            }
        }
    }*/
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png"/>
    <title>CoStudy</title>
    <style>
        form {display: grid;grid-template-columns: 1fr;grid-gap: 10px}
        body {display: grid;place-items: center;min-height: 100vh;background-image: url("images/kasit.png"); background-repeat: no-repeat;background-size:1400px 1000px;background-attachment: fixed;font-family: copperplate, Candara;color:#366CC7;}
        input {width: 100%;padding: 0.75em 1.25em;margin: 0.5em 0;display: inline-block;border: 0.063em solid #ccc;box-sizing: border-box;}
        button {background-color: #366CC7;color: white;padding: 0.875em 1.25em;margin: 0.5em 0;border: none;cursor: pointer;width: 100%;}
        button:hover {opacity: 0.8;}
        .container {padding: 1em; .container {display: grid;grid-template-columns: 1fr;grid-gap: 20px;text-align: center;}}
        .main {position: relative;z-index: 1;padding:1.33em; border-radius: 0.67em;background-color: #B3BDD4;/*background-color: rgba(255, 255, 255, .15);  backdrop-filter: blur(5px);*/justify-content: center;align-items: center;display: flex;flex-wrap: wrap;}
        .wrap-login100 {padding: 55px 15px 37px;width: 400px;margin: 0 auto;}
        @media (max-width: 576px) {.wrap-login100 {width: 80%;}}
        a {color:#366CC7;}
    </style>
</head>
<body>
    <!-- this must work-->
    <!-- testing commit -->
    <!-- ayaaaa nnnn-->
    <img src="images/favicon.png" alt="website-logo" width="130em" height="100em"/> 
    <div class ="wrap-login100 main">
        <p style="font-size:2.5em;"> Log In </p> 
        <form action="" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <button type="submit" name="submit">Login</button>
                <a href="resetpassword.php"> forget password? </a>
                <p style="text-align:center;font-weight: bold;"> Create an account- <a href="signin.php"> Sign Up </a> </p>
            </div>
        </form>
    </div>
    <!--dareeeeen-->
    <!--end of sign in form-->
</body>
</html>
