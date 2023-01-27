

<?php
echo"Recordings of flights in Franch ";
$db = new mysqli('localhost', 'root', '', 'secure');
$qrystr = "select * from franch"; $res = $db->query($qrystr);
?>
<?php
if (mysqli_num_rows($res) > 0) {
    ?>
    <table border=" pink 2px solid">
        <tr>
            <td>first name</td>
            <td>last name </td>
            <td>phone number</td>
            <td>Birth day</td>
            <td>Flight date </td>
            <td>Notes</td>
            <td>Program</td>

        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($res)) {
            ?>
            <tr>
                <td><?php echo $row["fname"]; ?></td>
                <td><?php echo $row["Lname"]; ?></td>
                <td><?php echo $row["phone number"]; ?></td>
                <td><?php echo $row["Birthday"]; ?></td>
                <td><?php echo $row["time"]; ?></td>
                <td><?php echo $row["Notes"]; ?></td>
                <td><?php echo $row["program"]; ?></td>

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
    <title>Franch</title>
    <style>
        body{
            background-color: #abb0b8;
        }
    </style>
</head>
<body>

</body>
</html>



