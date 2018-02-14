<?php
$conn = mysqli_connect("localhost", "root", "", "databaseexam");
if (isset($_GET['user'])) {
    $user = $_GET['user'];
    if (empty($user)) {
        echo "<p style='color:red'>You forgot the id of the user!</p>";
        die();
    }
	$sqlDelete = "DELETE FROM users WHERE id = $user";
    $userDelete = $conn->query($sqlDelete);
    header('Location: userlist.php');
} else {
    echo "<p style='color:red'>No user was given. Set the user id in the url like this: <br>".
    "http://localhost:3000/database-programmering-eksamen-AndreasHaagh/deleteUser.php?user=id</p>"
}