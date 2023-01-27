<?php

if(isset($_POST['uname']) && isset($_POST['uemil'])&& isset($_POST['upass'])) {
    $uname1 = $_POST['uname'];
    $upassr1 = $_POST['upass'];
    $uemil1 = $_POST['uemil'];

    try {

        $db1 = new mysqli('localhost', 'root', '', 'secure');
        $qrystr1 = "INSERT INTO `member` (`USERNAME`, `EMAIL`, `PASSWORD`) VALUES ('".$uname1 ."', '".$uemil1 ."', '".$upassr1 ."')";

        $res1=$db1->query($qrystr1);
        $db1->commit();
        $db1->close();
        if( $res1==1){
            header('location:start.php');
        }
        else{
            echo "<h3 style='color : red' > uncorrect !!plz choose another user name </h3>";
        }


    } catch (Exception $e) {
        echo "<h3 style='color : red' > uncorrect !! </h3>";
    }
}
elseif(isset($_POST['USERNAME']) && isset($_POST['PASSWORD'])) {

    $uname = $_POST['USERNAME'];
    $upassr = $_POST['PASSWORD'];

    try {

        $db = new mysqli('localhost', 'root', '', 'secure');
        $qrystr = "select * from member";
        $res = $db->query($qrystr);
        for ($i = 0; $i < $res->num_rows; $i++) {
            $row = $res->fetch_assoc();
            if( $row['USERNAME']==$uname&& $row['PASSWORD']== $upassr){
                header('location:start.php');
            }
            else{

                echo "<h3 style='color : red' > Username and/or Password are not correct!! </h3>";
            }
        }
        $db->close();
    } catch (Exception $e) {

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">


    <script

        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="signin.css" />
    <title>Sign in & Sign up Form</title>
</head>
<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="login.php" method="post" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="USERNAME" placeholder="Username" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="PASSWORD" placeholder="Password"/>
                    <br>


                </div>


                <input type="submit" value="Login" class="btn solid" />
                <a href="Admin.php"> <font  face="courier" size="6px" color="#ff69b4" > <b> <i> Login as Admin </i></b> </font> </a>


                <p class="social-text">Or Sign in with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
            <form action="login.php"  method="post" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="uname" placeholder="Username" />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="uemil" placeholder="Email" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="upass"placeholder="Password" />
                </div>


                <input type="submit" value="signup" class="btn " />
                <p class="social-text">Or Sign up with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>New here ?</h3>
                <p>
                    Start your tour to discover the world and have nice memory
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    Sign up
                </button>
            </div>
            <img src="img2.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>One of us ?</h3>
                <p>
                    Never Stop exploring the world!
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    Sign in
                </button>
            </div>
            <img src="img3.svg" class="image" alt="" />
        </div>
    </div>
</div>

<script src="signin.js"></script>
</body>
</html>