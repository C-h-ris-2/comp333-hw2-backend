<?php
include 'connection.php';
$sql = "SELECT * FROM ratings";
$ratings = mysqli_query($db, "SELECT * FROM ratings");
mysqli_close($db);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Music Rating Page</title>
</head>
<body>
    <?php
        echo "You are currently logged in as: " . $_SESSION["username"] . ".<br>";
    ?>
    <a href="logout.php">Log Out</a>
    <h1>Song Ratings</h1>
    <a href="newsong.php">Add a New Song</a>
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
                if($rows['username'] == $_SESSION['username']){
                    ?>
                    <tr>
                        <td><?php echo $rows['id'];?></td>
                        <td><?php echo $rows['username'];?></td>
                        <td><?php echo $rows['artist'];?></td>
                        <td><?php echo $rows['song'];?></td>
                        <td><?php echo $rows['rating'];?></td>
                        <td><a href="view.php?id=<?php echo $rows["id"];?>">View</a></td>
                        <td><a href="update.php?id=<?php echo $rows["id"];?>">Update</a></td>
                        <td><a href="delete.php?id=<?php echo $rows["id"]; ?>">Delete</a></td>
                    </tr>
                    <?php       
                }
                else{?>
                    <tr>
                        <td><?php echo $rows['id'];?></td>
                        <td><?php echo $rows['username'];?></td>
                        <td><?php echo $rows['artist'];?></td>
                        <td><?php echo $rows['song'];?></td>
                        <td><?php echo $rows['rating'];?></td>
                        <td><a href="view.php?id=<?php echo $rows["id"];?>">View</a></td>
                    </tr> 
                    <?php      
                }
             
        }
        ?>
    <table>
</body>


