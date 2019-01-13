<?php
	include_once 'includes/dbh.inc.php';
	

?>

<?php
	include_once 'header.php';
?>
		<div class="divider"> </div>
		<?php 
			$sql="SELECT * from tableblogs  ORDER BY postid DESC; ";
			$resultBlog = mysqli_query($connct,$sql);//this will excute the query
			$resultCheck =mysqli_num_rows($resultBlog);

		?>
        <div class="posting">
        	<form action="Blogs.php" method="post" id="postingform">
			<ul>
				<li><h1 style="text-align:left; padding-left:140px; color:#664B23">Write your own blog</h1></li>
           		<li><input type="text" name="title" placeholder="Write a Title.." size="95"  required="required"></li>
				<li><textarea cols="83" rows="6" name="content" placeholder="Write Description..."  ></textarea></li>
			
				<li><input type="submit" name="sub" value="submit the blog" style="text-align:left; font-size:20px;  background-color:#1F4FB7"/></li>
        	</ul>
        	</form><br>
        </div>

        <?php
				$con=mysqli_connect("localhost","root","","csesociety") or die("Connection was not Established");
					
					if(isset($_POST['sub'])){
						$userid=$_SESSION['logged_in_userid'];
					    $username=$_SESSION['logged_in_username'];
						$title=addslashes($_POST['title']);
						$content=addslashes($_POST['content']);
						if($content==''||$username==''){
							echo "<h2>please enter topic description</h2>";
							header("Location: noblog.php?hoi nai");
							exit();
						}
						else{
						$insert="insert into tableblogs
						(regno,username,email,status,date) values
						('$userid','$username','$title','$content',NOW())";

						$run= mysqli_query($connct,$insert);
			            header("Location: Blogs.php?hoilo$title");
						unset($_POST['sub']);
						}
					}
		?>
		<div class="showposts">
			<?php
			    while($rowBlog=mysqli_fetch_array($resultBlog)){
			    	$id= $rowBlog['regno'];
			    	$sql="SELECT * from customers where id='$id'; ";
					$resultidentity = mysqli_query($connct,$sql);//this will excute the query
					$rowIdentity=mysqli_fetch_array($resultidentity);

			    	echo '<div class="singlepost">';
						echo '<div class="posttitle">Title : ' . $rowBlog['email'] . '</div>';
						echo '<div class="postusername">' . $rowBlog['username'].' [' .$rowIdentity['user_prof'] .']</div>';
						$statusString=$rowBlog['status'];
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