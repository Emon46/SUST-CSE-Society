<?php
	include_once 'includes/dbh.inc.php';
	

?>

<?php
	include_once 'header.php';
?>
		<div class="divider"> </div>
		<?php 
			$sql="SELECT * from achievment ORDER BY achvid DESC; ";
			$resultAchv = mysqli_query($connct,$sql);//this will excute the query
			$resultCheck =mysqli_num_rows($resultAchv);

		?>
        <div class="posting">
        	<form action="achievement.php" method="post" id="postingform">
			<ul>
				<li><h1 style="text-align:left; padding-left:140px; color:#664B23">Write about our glory</h1></li>
           		<li><input type="text" name="titleachv" placeholder="Write a Title.." size="95"  required="required"></li>
				<li><textarea cols="83" rows="6" name="contentachv" placeholder="Write Description..."  ></textarea></li>
			
				<li><input type="submit" name="subachv" value="Submit here" style="text-align:left; font-size:20px;  background-color:#1F4FB7"/></li>
        	</ul>
        	</form><br>
        </div>

        <?php
				$con=mysqli_connect("localhost","root","","csesociety") or die("Connection was not Established");
					
					if(isset($_POST['subachv'])){
						$userid=$_SESSION['logged_in_userid'];
					    $username=$_SESSION['logged_in_username'];
						$titleachv=addslashes($_POST['titleachv']);
						$contentachv=addslashes($_POST['contentachv']);
						if($contentachv==''||$username==''){
							echo "<h2>please enter topic description</h2>";
							header("Location: noachv.php?no topic details");
							exit();
						}
						else{
						$insert="insert into achievment
						( achvtitle, achvstatus, achwriter, achvdate,writerid) values
						('$titleachv','$contentachv','$username',NOW(),$userid)";

						$run= mysqli_query($connct,$insert);
			            header("Location: achievement.php?done_submition");
						unset($_POST['subachv']);
						}
					}
		?>
		<div class="showposts">
			<?php
			    while($rowAchv=mysqli_fetch_array($resultAchv)){
			    	$id= $rowAchv['writerid'];
			    	$sql="SELECT * from customers where id='$id'; ";
					$resultidentity = mysqli_query($connct,$sql);//this will excute the query
					$rowIdentity=mysqli_fetch_array($resultidentity);

			    	echo '<div class="singlepost">';
						echo '<div class="posttitle">Title : ' . $rowAchv['achvtitle'] . '</div>';
						echo '<div class="postusername">' . $rowAchv['achwriter'].' [' .$rowIdentity['user_prof'] .']</div>';
						$statusString=$rowAchv['achvstatus'];
						// if(strlen($statusString)>10)
						// {
						// 	$stringCut=substr($statusString,0,15);
						// 	$statusString=substr(($stringCut), 0,strpos($stringCut, ' ')) . '... <a  href="">read more</a>';
						// }
			        	echo "<p>" . $statusString . "</p>";
			        	echo '</div>';
				    } 

		    ?>   
		</div>

		<div style="margin-top:150px;">
		</div>

<?php
	include_once 'footer.php';
?>