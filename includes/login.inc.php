<?php
session_start();

if(isset($_POST['submit']))
{
	include 'dbh.inc.php';

	$username=mysqli_real_escape_string($connct,$_POST['username']);
	$pwd=mysqli_real_escape_string($connct,$_POST['pwd']);
	//error handlers

	//check if input are empty
	if(empty($username)||empty($pwd)){
		header("Location: ../index.php?login=empty");
	    exit();
	}
	else {
		$sql="SELECT * FROM customers WHERE user_name='$username' OR email='$username';";
		$result=mysqli_query($connct, $sql);
		$resultCheck =mysqli_num_rows($result);
		if($resultCheck<1){
			header("Location: ../index.php?login=no_user_match");
	        exit();
		}
		else {
			if($row=mysqli_fetch_assoc($result)){
				//dehashing pass
				$hashedpwdcheck=password_verify($pwd,$row['user_pass']);
				if($hashedpwdcheck==false){
					header("Location: ../index.php?login=no_pass_match");
	        		exit();
				}
				elseif ($hashedpwdcheck==true) {
					//login the user here

					$_SESSION['logged_in_userid']=$row['ID'];
					$_SESSION['logged_in_username']=$row['user_name'];
					$user=$row['user_name'];
					$_SESSION['logged_in_firstname']=$row['first_name'];
					$_SESSION['logged_in_lastname']=$row['last_name'];
					$_SESSION['logged_in_email']=$row['email'];
					$_SESSION['logged_in_prof']=$row['user_prof'];
					header("Location: ../index.php?login_as_$user");
	        		exit();

				}
			}

		}
	}

}
else {
	header("Location: ../index.php?login=error");
	exit();
}