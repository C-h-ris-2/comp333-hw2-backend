<?php
include 'connection.php';
$sql = "SELECT * FROM ratings";
$ratings = mysqli_query($db, "SELECT * FROM ratings");
mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Music Rating Page</title>
</head>
<body>
    <h1>Song Ratings</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Artist</th>
            <th>Song</th>
            <th>Rating</th>
        </tr>
        <?php 
            while($rows=mysqli_fetch_assoc($ratings)){
        ?>
        <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['username'];?></td>
                <td><?php echo $rows['artist'];?></td>
                <td><?php echo $rows['song'];?></td>
                <td><?php echo $rows['rating'];?></td>
        </tr>       
        <?php        
        }
        ?>
    <table>
</body>

