<!DOCTYPE html>
<html lang="en">
<?php /*
    //insert new users in DB
    session_start();
    $conn = mysqli_connect('localhost','root','','');
    if(isset($_POST['submit'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];

        $firstname=mysqli_real_escape_string($conn,$firstname);
        $lastname=mysqli_real_escape_string($conn,$lastname);
        $email=mysqli_real_escape_string($conn,$email);
        $username=mysqli_real_escape_string($conn,$username);
        $password=mysqli_real_escape_string($conn,$password);

        $password=password_hash($password,PASSWORD_BCRYPT);
        $query = "INSERT INTO user VALUES('{$email}','{$firstname}','{$lastname}','{$password}','{$username}')";
        mysqli_query($conn,$query); 
        header("Location: home.php");
        exit();    
    }*/
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png"/>
    <title>CoStudy</title>
    <style>
        form {display: grid;grid-template-columns: 1fr;grid-gap: 10px}
        body {display: grid;place-items: center;min-height: 100vh;background-image: url("images/kasit.png");  background-repeat: no-repeat;background-size:1400px 1000px;background-attachment: fixed;font-family: copperplate, Candara;color:#366CC7;}
        input {width: 100%;padding: 0.75em 1.25em;margin: 0.5em 0;display: inline-block;border: 0.063em solid #ccc;box-sizing: border-box;}
        button {background-color: #366CC7;color: white;padding: 0.875em 1.25em;margin: 0.5em 0;border: none;cursor: pointer;width: 100%;}
        button:hover {opacity: 0.8;}
        .container {padding: 1em; .container {display: grid;grid-template-columns: 1fr;grid-gap: 20px;text-align: center;}}
        .main {position: relative;z-index: 1; border-radius: 0.67em;background-color: #B3BDD4; opacity: 0.8;/*background-color: rgba(255, 255, 255, .15);  backdrop-filter: blur(5px);*/justify-content: center;align-items: center;display: flex;flex-wrap: wrap;}
        .wrap-login100 {padding: 55px 15px 37px;width: 400px;margin: 0 auto;}
        @media (max-width: 576px) {.wrap-login100 {width: 80%;}}
        a {color:#366CC7;}
    </style>
</head>
<body>
        <!--register form-->
        <img src="images/favicon.png" alt="website-logo" width="130em" height="100em"/> 
        <div class ="wrap-login100 main" >
            <p style="font-size:2.5em;margin-top:0px;"> Sign UP </p> 
            <form action="" method="post">
                <div class="container">
                    <label for="fn"><b>First Name</b></label>
                    <input type="text" placeholder="Enter First Name" name="firstname" required>
                    <label for="ln"><b>Last Name</b></label>
                    <input type="text" placeholder="Enter Last Name" name="lastname" required>
                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Enter Your Email" name="email" required>
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <button type="submit" name="submit">Sign Up</button>
                    <p> Already have an account?- <a href="login.php"> Log In </a> </p>
                </div>
            </form>
        </div>
</body>
</html>