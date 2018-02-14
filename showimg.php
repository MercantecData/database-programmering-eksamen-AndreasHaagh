<?php

if (isset($_GET['image'])) {
    $image = $_GET['image'];
    if (empty($image)) {
        echo "<p style='color:red'>You forgot the src of the image!</p>";
        die();
    }
    echo "<img src='$image'>";
} else {
    echo "<p style='color:red'>No image was given. Set the src to the image in the url like this: <br>".
    "http://localhost:3000/database-programmering-eksamen-AndreasHaagh/showimg.php?image=src</p>";
}