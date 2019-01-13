<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>CSE Socity</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
        <nav>

			<h1>CSE SOCIETY</h1>
			<div class="main-wrapper">
				<ul>
					<li><a href="index.php">Home </a></li>
					<li><a href="achievement.php">Achievment</a></li>
					<li><a href="Blogs.php">Blogs</a></li>
					<li><a href="news.php">Notice</a></li>
					<?php if(isset($_SESSION['logged_in_username'])){
						echo '<li><a href="election.php">Election</a></li>';
					} ?>

				</ul
			</div>
			<div class="nav-login">		
				<?php
					if(isset($_SESSION['logged_in_username'])){
						echo '<a href="profile.php" style="font-size:14px;padding-right:10px; padding-left:0px;text-align:left;">'. $_SESSION['logged_in_username'] .' </a>';
						echo '<form action="includes/logout.inc.php" method="POST">';

						echo '<button type="submit" name="submit">Logout</button>
						</form>';
					}
					else {
						echo '<form action="includes/login.inc.php" method="POST">
							<input type="text" name="username" placeholder="username">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">login</button>
						</form>
				        <a href="signup.php">sign up</a> ';
					}
				?>
			</div>
		</nav>
	</header>