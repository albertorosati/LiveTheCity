<?php
$conn = new mysqli("localhost","livethecity","","my_livethecity");
$email=$_POST['email'];
$pass=$_POST['password'];
$password=hash('sha256',$pass);
$query=$conn->prepare("SELECT * FROM users WHERE email =? AND password = ?");
$query->bind_param('ss', $email, $password);
$result=$query->execute();
if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($password == $row['password']) {
                session_start();
                $_SESSION['name'] = $row['name'];
                $_SESSION['surname'] = $row['surname'];
		        $_SESSION['email']= $row['email'];
		}
	}
}
    $query->close();
    $conn->close();
?>