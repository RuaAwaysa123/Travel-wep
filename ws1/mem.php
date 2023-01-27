
<?php
echo"Members who have registered ";
$db = new mysqli('localhost', 'root', '', 'secure');
$qrystr = "select * from member"; $res = $db->query($qrystr);
?>
<?php
if (mysqli_num_rows($res) > 0) {
    ?>
    <table border=" pink 2px solid">

        <tr>

            <td>User name</td>
            <td>Email </td>
            <td>PASSWORD</td>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($res)) {
            ?>
            <tr>
                <td><?php echo $row["USERNAME"]; ?></td>
                <td><?php echo $row["EMAIL"]; ?></td>
                <td><?php echo $row["PASSWORD"]; ?></td>
            </tr>
            <?php
            $i++;
        }
        ?>
    </table>
    <?php
}
else{
    echo "No result found";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="signin.css" />
    <title>Member</title>
    <style>
        body{
            background-color: #abb0b8;
            background-image: ;
        }
    </style>
</head>
<body>

</body>
</html>



