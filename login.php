<?php
if (isset($_POST['email'])) {
	$conn = new mysqli("localhost","livethecity","","my_livethecity");

	$email = @$conn->real_escape_string($_POST['email']);
	$pass = @$conn->real_escape_string($_POST['password']);
	
	$password=hash('sha256',$pass);

	$sql = "SELECT * FROM users WHERE email='" . $email . "'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			if ($password == $row['password']) {

				session_start();
                $_SESSION['id']=$row['id_user'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['nome'] = $row['name'];
				$_SESSION['cognome'] = $row['surname'];
				$_SESSION['professione'] = $row['professione'];
				$_SESSION['profile_pic'] = $row['profile_pic'];
				$_SESSION['skills'] = $row['skills'];
                $text = "SELECT quartieri.id_quartiere FROM quartieri inner join users on(id_quartiere=fk_id_quartiere) WHERE id_user ='$row ['id_user']'";
				$ris=$conn->query($text);
                if($ris->num_rows >0){
                while($riga=$ris->fetch_assoc()){
                $_SESSION['id_quartiere']=$rig['id_quartiere'];
                }
					}		
				$conn->close();
								
				header('Location: home.php');
				exit();
			}
			else {
				$conn->close();
				header('Location: index.php?err');
				exit();
			}
		}
	}
	else {
		$conn->close();
		header('Location: index.php?e');
		exit();
	}

	$conn->close();
}
?>