<?php

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['Phone']) && isset($_POST['birth']) && isset($_POST['week']) && isset($_POST['area'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['Phone'];
    $birth= $_POST['birth'];
    $week= $_POST['week'];
    $comm=$_POST['area'];

    try {

        $db = new mysqli('localhost', 'root', '', 'secure');
        $qrystr = " INSERT INTO `franch` (`fname`, `Lname`, `phone number`, `Birthday`, `time`, `Notes`, `program`) VALUES ('".$fname."', '".$lname."', '".$phone."', '". $birth."', '". $week."', '". $comm."', 'third program');
 ";
        $res1=$db->query($qrystr);
        $db->commit();
        $db->close();
        if( $res1==1){
            header('location:p.html');
        }
        else{
            echo "<h3 style='color : red' > uncorrect !!plz enter valid information </h3>";
        }


    } catch (Exception $e) {
        echo "<h3 style='color : red' > uncorrect !! </h3>";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book ticket</title>
    <style>
        body{
            background-color : skyblue;
        }
        div.img{
            width: 150px;
            height: 150px;
            font-size: 14px;
            font-weight: bold;
            margin:5px 5px 5px 20px;
            text-align: center;
            background-color: black;
            padding: 10px;
            float: left;
        }
    </style>
</head>
<body>
<div>
    <img src="trr1.png" width="1000" height="300">
    <h2> Hello to the International Tourism Company -- Book ticket</h2>
    <p> Plz tell us about yourself information</p>
    <form action="fra_data.php" method="post">

        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname" size="40" ><br><br>

        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname" size="40" ><br><br>
        <label for="phone">Phone number:</label>
        <input type="text" id="phone" name="Phone" size="40" ><br><br>
        <label for="birth">Birthday:</label>
        <input type="date" id="birth" name="birth" ><br><br>
        <p>With which program would you like to register?</p>
        <input type="checkbox" name="first" value="First program"> First program
        <input type="checkbox" name="second" value="Second program"> Second program
        <input type="checkbox" name="third" value="Third program"> Third program <br><br>
        <p>plz Choose the week you are traveling in?</p>
        <input type="week" name="week" max="2023-5" min="2022-4"><br><br>
        <p>Any comment?</p>
        <textarea name="area" rows="7" cols="70" wrap="hard">
     </textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</div>
<div class="img">
    <a href="ticfran.html"> <img src="ss.jpg"  width="100px" height="100px"> </a>

    <br> Washington

</div >
</body>
</html>
