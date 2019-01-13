<?php
	include_once 'includes/dbh.inc.php';
	

?>

<?php
	include_once 'header.php';
?>
		<div class="divider"> </div>


        
		
        <h1 style="text-align:center; padding-left:0px; color:#664B23"> User Profile</h1>

        <div style="float:center; margin: 0px auto; width:70% ;text-align:center; padding-left:0px; color:#664B23; background-color:powderblue;">
        	<h2>Name : <?php  echo $_SESSION['logged_in_firstname'] ." ".$_SESSION['logged_in_lastname'] ; ?></h2>
        </div>
        <div style="float:center; margin: 0px auto; width:70% ;text-align:center; padding-left:0px; color:#664B23; background-color:powderblue;">
                <h2>Username : <?php  echo $_SESSION['logged_in_username']; ?></h2>
        </div>
        <div style="float:center; margin: 0px auto; width:70% ;text-align:center; padding-left:0px; color:#664B23; background-color:powderblue;">
                <h2>Email : <?php  echo $_SESSION['logged_in_email']; ?></h2>
        </div>
        <div style="float:center; margin: 0px auto; width:70% ;text-align:center; padding-left:0px; color:#664B23; background-color:powderblue;">
                <h2>logged in as a <?php  echo $_SESSION['logged_in_prof']; ?></h2>
        </div>
        



        <div style="margin-top:255px;">
		</div>

<?php
	include_once 'footer.php';
?>