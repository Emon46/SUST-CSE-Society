<?php
    include_once 'header.php';
?>
	<section class="main-container" >
		<div class="main-wrapper">
			<h2>sign up</h2>
			<form class="signup-form" action="includes/signup.inc.php" method="POST">
				
				<input style=" float: center; height: 40px;  width: 80%; padding: 0px 5%; border: none; background-color: #ccc; line-height: 40px; margin-bottom: 4px;" type="text" name="firstname" placeholder="first name">
				
				<input  style=" float: center; height: 40px;  width: 80%; padding: 0px 5%; border: none; background-color: #ccc; line-height: 40px; margin-bottom: 4px;" type="text" name="lastname" placeholder="last name">
				
				<input style=" float: center; height: 40px;  width: 80%; padding: 0px 5%; border: none; background-color: #ccc; line-height: 40px; margin-bottom: 4px;" type="text" name="username" placeholder="username">
				
				<input style=" float: center; height: 40px;  width: 80%; padding: 0px 5%; border: none; background-color: #ccc; line-height: 40px; margin-bottom: 4px;" type="text" name="email" placeholder="email">
				
				<input style=" float: center; height: 40px;  width: 80%; padding: 0px 5%; border: none; background-color: #ccc; line-height: 40px; margin-bottom: 4px;" type="password" name="password" placeholder="password">

				<b class="profession">Profession : </b></br>
				<input style="float: left; width : 20% ;height : 20px ;padding:5px 0px 0px 0px; margin: 10px 0px 0px 0px;" type ="radio" name ="proffesion" value="teacher"> <p style="text-align: left">Teacher</p>
				<input style="float: left; width : 20% ;height : 20px ;padding:5px 0px 0px 100px; margin: 10px 0px 0px 127px;" type ="radio" name ="proffesion" value="Student"> <p style="text-align: left;margin: 25px 0px 15px 0px;">Student</p>
			    </br>
			    
				<button type="submit" name="submit">sign up</button>
			</form>

		</div>
	</section>

		<div style="margin-top:150px;">
		</div>

<?php
	include_once 'footer.php';
?>