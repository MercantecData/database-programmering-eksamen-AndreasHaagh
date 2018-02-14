<title>Admin Page</title><?php

if(isset($_POST["submit"])) {
	$conn = mysqli_connect("localhost", "root", "", "DatabaseExam");

	$username = $conn->real_escape_string($_POST["username"]);
	$password = $conn->real_escape_string($_POST["password"]);

	$sql = "SELECT id, password FROM adminusers WHERE username = '$username'";
	$result = $conn->query($sql);

	if($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$id = $row['id'];

		if ($password == $row['password']) {
			$hash = password_hash($row['password'], PASSWORD_DEFAULT);
        	$sqlUpdate = "UPDATE adminusers SET password = '$hash' WHERE id = $id";
			$result = $conn->query($sqlUpdate);
			header("Location: userlist.php");
		}

		if (password_verify($password, $row['password'])) {
			header("Location: userlist.php");
		} else {
			echo "<p style='color:red'>Wrong password</p>";
		}
		exit;
	} else {
		echo "<p style='color:red'>Wrong Username</p>";
	}
}
?>

<form action="admin.php" method="POST">
	username:<input type="text" name="username">
	password:<input type="password" name="password">
	<input type="hidden" name="strongkey" value="Lzk34yR71?hrIP">
	<input type="submit" name="submit" value="login">
</form>