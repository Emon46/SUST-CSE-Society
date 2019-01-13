<?php
if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';
	$firstname=mysqli_real_escape_string($connct,$_POST['firstname']);

	$lastname=mysqli_real_escape_string($connct,$_POST['lastname']);

	$username=mysqli_real_escape_string($connct,$_POST['username']);

	$email=mysqli_real_escape_string($connct,$_POST['email']);

	$pwd=mysqli_real_escape_string($connct,$_POST['password']);

	$prfsn=mysqli_real_escape_string($connct,$_POST['proffesion']);
	//Error handlers
	//check for empty fields
	if(empty($firstname)||empty($lastname)||empty($username)||empty($email)||empty($pwd)||empty($prfsn)){
		header("Location: ../signup.php?signup=empty");
		exit();
	}
	else {
		//check if input is valid
		if(!preg_match("/^[a-zA-Z]*$/", $firstname)|| !preg_match("/^[a-zA-Z]*$/", $lastname)){
			header("Location: ../signup.php?signup=invalid");
			exit();
		}
		else{
			//check is email is valid
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header("Location: ../signup.php?signup=invalidemail");
				exit();
			}
			else{
				$sql="SELECT * FROM customers WHERE user_name='$username'";
				$result=mysqli_query($connct, $sql);
				$resultCheck =mysqli_num_rows($result);
				if ($resultCheck>0) {
					header("Location: ../signup.php?signup=already_exist_username");
					exit();
				}
				else {
					//hashing passwrd
					$hashedpwd=password_hash($pwd,PASSWORD_DEFAULT);
					//insert in datatable
					$sql="INSERT INTO customers (first_name,last_name,user_name,email,user_pass,user_prof) values ('$firstname','$lastname','$username','$email','$hashedpwd','$prfsn');";
					mysqli_query($connct,$sql);
					header("Location: ../index.php?signup=$username");
					exit();
				}
			}
		}
	}
}
else {
	header("Location: ../signup.php");
	exit();
}
?>