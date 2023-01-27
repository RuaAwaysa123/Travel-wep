<?php
if(isset($_post['uname']) && isset($_post['uemil'])&& isset($_post['upass'])) {

    $uname1 = $_post['uname'];
    $upassr1 = $_post['upass'];
    $uemil1 = $_post['uemil'];

    try {

        $db1 = new mysqli('localhost', 'root', '', 'secure');
        $qrystr1 = "insert into `member` (`USERNAME`, `EMAIL`, `PASSWORD`) values ('".$uname1 ."', '".$uemil1 ."', '".$upassr1 ."')";

        $res=$db1->query($qrystr1);
        $db1->commit();
        if( $res==1){
            header('location:login.php');
        }
        else{
            echo "<h3 style='color : red' > uncorrect !!plz choose another user name </h3>";
        }
        $db1->close();

    } catch (Exception $e) {
        echo "<h3 style='color : red' > uncorrect !! </h3>";
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
            <form action="#"  class="sign-in-form">
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
                    <input type="text" name="uname" placeholder="uUsername" />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="uemil" placeholder="uEmail" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="upass"placeholder="uPassword" />
                </div>


                <input type="submit" value="signup" class="btn solid" />
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