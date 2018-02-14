<?php

$conn = mysqli_connect("localhost", "root", "", "DatabaseExam");

$usrname = $conn->real_escape_string($_POST["username"]);
$password = $conn->real_escape_string($_POST["password"]);

$sql = "SELECT id, name, password FROM users WHERE username = '$usrname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row["id"];
    $name = $row["name"];

    if ($password == $row['password']) {
        $hash = password_hash($row['password'], PASSWORD_DEFAULT);
        $sqlUpdate = "UPDATE users SET password = '$hash' WHERE id = $id";
        $result = $conn->query($sqlUpdate);

        start_session($id, $name);
    }

    if (password_verify($password, $row['password'])) {
        start_session($id, $name);
    } else {
        echo "<p style='color:red'>Wrong password</p>";
    }
} else {
    echo "<p style='color:red'>Wrong username</p>";
}

function start_session($id, $name) {
    session_start();
    $_SESSION['userID'] = $id;
    $_SESSION["userName"] = $name;
    header("Location: index.php");//redirects back
}