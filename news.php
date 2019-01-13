<?php
	include_once 'includes/dbh.inc.php';
	

?>

<?php
	include_once 'header.php';
?>
		<div class="divider"> </div>
		<?php 
			$sql="SELECT * from tablenews ; ";
			$resultBlog = mysqli_query($connct,$sql);//this will excute the query
			$resultCheck =mysqli_num_rows($resultBlog);

		?>
        <h1 style="text-align:center; padding-left:0px; color:#664B23">Update notice About CSE,SUST</h1>

        
		<div class="showposts">
			<?php
			    while($rowBlog=mysqli_fetch_array($resultBlog)){

					

			    	echo '<div class="singlepost">';
						echo '<div class="posttitle">Title : ' . $rowBlog['headline'] . '</div>';
						$statusString=$rowBlog['story'];
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

		<div style="margin-top:300px;">
		</div>

<?php
	include_once 'footer.php';
?>