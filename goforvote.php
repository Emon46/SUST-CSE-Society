<?php
    include_once 'header.php';
?>



		<div>
			<form  action="savevote.php" method="POST">
				<div>
				
					<div id="votinglist">
						<h1 class='h1' style="color:blue"> Select one for vice president</h1>
						<ul >
							
							<li><img width="150px" height="170px" src="images/emon.jpg"  ></li>

							<li style=" height: 90%;  width: 60%; "><h3>habibur rahaman</h3></li>
							<li><input type="radio" name="president" value="2015331046" ></li>

						</ul>
						<ul >
							
							<li><img width="150px" height="170px" src="images/arman.jpg"  ></li>

							<li style=" height: 90%;  width: 60%; "><h3>Arman malik</h3></li>
							<li><input type="radio" name="president" value="2015331060" ></li>

						</ul>
						<ul >
							
							<li><img width="150px" height="170px" src="images/akash.jpg"  ></li>

							<li style=" height: 90%;  width: 60%; "><h3>Akash saha</h3></li>
							<li><input type="radio" name="president" value="2015331055" ></li>

						</ul>
					</div>

<!-- ////////////// gGSGSGGSGgsgsggsgsggsggggsgsgsggsggsGSGGSGSGGSGS -->

					<div id="votinglistgs">
						<h1 class='h1' style="color:blue"> Select one for General secretary</h1>
						<ul >
							
							<li><img width="150px" height="170px" src="images/sohel.jpg"  ></li>

							<li style=" height: 90%;  width: 60%; "><h3>monirul sohel </h3></li>
							<li><input type="radio" name="gs" value="2015331032" ></li>

						</ul>
						<ul >
							
							<li><img width="150px" height="170px" src="images/rishad.jpg"  ></li>

							<li style=" height: 90%;  width: 60%; "><h3>mahabub rishad</h3></li>
							<li><input type="radio" name="gs" value="2015331065" ></li>

						</ul>
						<ul >
							
							<li><img width="150px" height="170px" src="images/sumit.jpg"  ></li>

							<li style=" height: 90%;  width: 60%; "><h3>sumit singha</h3></li>
							<li><input type="radio" name="gs" value="2015331064" ></li>

						</ul>
					</div>


<!-- AAAAAAAAAAAAAAAAAAAAGSGSGSGSGSGGSGSGGSGSGGS -->

					<div id="votinglistags" >
						<h1 class='h1'  style="color:blue; "> Select one for Assistant General secretary</h1>
						<ul >
							
							<li><img width="150px" height="170px" src="images/mahfuz.jpg"  ></li>

							<li style=" height: 90%;  width: 60%; "><h3>mahfuz rahaman</h3></li>
							<li><input type="radio" name="ags" value="2015331027" ></li>

						</ul>
						<ul >
							
							<li><img width="150px" height="170px" src="images/junayed.jpg"  ></li>

							<li style=" height: 90%;  width: 60%; "><h3>sheikh junayed</h3></li>
							<li><input type="radio" name="ags" value="2015331044" ></li>

						</ul>
						<ul >
							
							<li><img width="150px" height="170px" src="images/anik.jpg"  ></li>

							<li style=" height: 90%;  width: 60%; "><h3>Anik anwar</h3></li>
							<li><input type="radio" name="ags" value="2015331015" ></li>

						</ul>
					    <h2><button type="submit" name="submitvote" style="background-color: #4CAF50; margin-top:20px;text-align:center; font-size: 20px;font-weight:500; color:blue">submit my vote</button></h2>
					    
					</div>

			    </div>
			</form>

		</div>

		<div style="margin-top:150px;">
		</div>

<?php
	include_once 'footer.php';
?>