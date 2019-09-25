<?php
	session_start();
    $db = mysqli_connect('localhost', 'root','root', 'Info');
	
	// $id = 0;
	// $username = "";
	// $password = "";
	
	// if(isset($_POST['save'])){
	// 	//$id = $_POST['ID'];
	// 	$username = $_POST['uname'];
	// 	$password = $_POST['psw'];
	// 	mysqli_query($db, "INSERT INTO Login(USERNAME, PASSWORD) VALUES('$username','$password')");
	// 	$_SESSION['message'] = "You've registered";
	// 	header('location:index.php');


	// }
	$error = '';
	if (isset($_POST['login'])) {
			$username = $_POST['uname'];
			$password = $_POST['psw'];


        $result = mysqli_query($db, "SELECT * FROM Login WHERE USERNAME = '$username' AND PASSWORD  = $password");
        $row = mysqli_num_rows($result);
		if ($row == 1) {
			header('location: loggedInPage.php');

		}
		else{
			$_SESSION['message'] = "USERNAME OR PASSWORD IS INVALID";
			//$error =  'Username or Password is invalid';
			header('location: index.php');
		}

		}
		
	
?>