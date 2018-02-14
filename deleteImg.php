<?php
$conn = mysqli_connect("localhost", "root", "", "databaseexam");
if (isset($_GET['imageId'])) {
    $image = $_GET['imageId'];
    if (empty($image)) {
        echo "<p style='color:red'>You forgot the id of the image!</p>";
        die();
    }
	$sqlDelete = "DELETE FROM images WHERE id = $image";
    $imageDelete = $conn->query($sqlDelete);
    header('Location: index.php');
} else {
    echo "<p>No image was given. Set the image id in the url like this: <br>".
    "http://localhost:3000/database-programmering-eksamen-AndreasHaagh/deleteImg.php?imageId=id</p>"
}