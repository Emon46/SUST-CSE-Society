<?php

	session_start();

if (isset($_POST['submitvote'])) {
	include_once 'includes/dbh.inc.php';

	$vpselect=mysqli_real_escape_string($connct,$_POST['president']);
	$gsselect=mysqli_real_escape_string($connct,$_POST['gs']);
	$agsselect=mysqli_real_escape_string($connct,$_POST['ags']);

	$username=$_SESSION['logged_in_username'];

	

	//error handlers

	if(empty($username)||empty($vpselect)||empty($gsselect)||empty($agsselect)){
		header("Location: errorvote.php?login=notselected");
	    exit();
	}
	else {
			$sql="SELECT * FROM customers WHERE user_name='$username'";
			$result=mysqli_query($connct, $sql);
			$row=mysqli_fetch_assoc($result);

		if($row['user_vote']){
			header("Location: pastvote.php?you_have_already_given_ur_vote");
	    	exit();
		}
		else {

			//check if input is valid
			$sql = "UPDATE voteforpresident SET vote_count_for_president=vote_count_for_president+1 WHERE president_reg='$vpselect'";
			mysqli_query($connct, $sql);

			$sql = "UPDATE voteforgs SET vote_count_for_gs=vote_count_for_gs+1 WHERE gs_reg='$gsselect'";
			mysqli_query($connct, $sql);

			$sql = "UPDATE voteforags SET vote_count_for_ags=vote_count_for_ags+1 WHERE ags_reg='$agsselect'";
			mysqli_query($connct, $sql);


			$sql = "UPDATE customers SET user_vote='1' WHERE user_name='$username'";
			mysqli_query($connct, $sql);
			header("Location: election.php?voteaccepted");
			exit();

		}
	}
}
?>