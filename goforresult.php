<?php
	include_once 'includes/dbh.inc.php';
	

?>

<?php
	include_once 'header.php';
?>
		<div class="divider"> </div>


		
        <h1 style="text-align:center; padding-left:0px; color:#664B23"> Election Result of CSE society,SUST</h1>

        <?php 
			$sql="SELECT * from voteforpresident ORDER BY vote_count_for_president DESC; ";
			$resultvote = mysqli_query($connct,$sql);//this will excute the query
			$resultCheck =mysqli_num_rows($resultvote);
			$vpchamp=mysqli_fetch_array($resultvote);

		?>
		<?php 
			$sql="SELECT * from voteforgs ORDER BY vote_count_for_gs DESC; ";
			$resultvote = mysqli_query($connct,$sql);//this will excute the query
			$resultCheck =mysqli_num_rows($resultvote);
			$gschamp=mysqli_fetch_array($resultvote);

		?>
		<?php 
			$sql="SELECT * from voteforags ORDER BY vote_count_for_ags DESC; ";
			$resultvote = mysqli_query($connct,$sql);//this will excute the query
			$resultCheck =mysqli_num_rows($resultvote);
			$agschamp=mysqli_fetch_array($resultvote);

		?>
		<div>
			<h3 style="text-align:center; padding-left:10px; color:#8B1CE2"># the winner of vice president election <?php echo $vpchamp['president_name'];?> </h3>
			<h3 style="text-align:center; padding-left:10px; color: #408808"># the winner of general secretary election <?php echo $gschamp['gs_name'];?> </h3>
			<h3 style="text-align:center; padding-left:10px; color:#2E0E04"># the winner of assistant general secretary election <?php echo $agschamp['ags_name'];?> </h3>
		</div>



        <?php 
			$sql="SELECT * from voteforpresident ORDER BY vote_count_for_president DESC; ";
			$resultvote = mysqli_query($connct,$sql);//this will excute the query
			$resultCheck =mysqli_num_rows($resultvote);
		?>
		<div class="showposts">
			<h2 style="text-align:center; padding-left:0px; color:#581845"> details of VP election</h2>
			<?php
			    while($rowvote=mysqli_fetch_array($resultvote)){
			
			    	echo '<div class="singlepost">';
						echo '<div class="posttitle"> Name: ' . $rowvote['president_name'] . '</div>';
						echo '<div class="postusername">Candidad for : Vice President</div>';
						echo '<div class="postusername">Total amount of vote for :' . $rowvote['vote_count_for_president'].'</div>';
						
			        	echo '</div>';
				    } 

		    ?> 
			
		</div>




		<?php 
			$sql="SELECT * from voteforgs ORDER BY vote_count_for_gs DESC; ";
			$resultvote = mysqli_query($connct,$sql);//this will excute the query
			$resultCheck =mysqli_num_rows($resultvote);
		?>
		<div class="showposts">
			<h2 style="text-align:center; padding-left:0px; color:#581845"> details of GS election</h2>
			<?php
			    while($rowvote=mysqli_fetch_array($resultvote)){
			
			    	echo '<div class="singlepost">';
						echo '<div class="posttitle"> Name: ' . $rowvote['gs_name'] . '</div>';
						echo '<div class="postusername">Candidad for : general secretary</div>';
						echo '<div class="postusername">Total amount of vote for :' . $rowvote['vote_count_for_gs'].'</div>';
						
			        	echo '</div>';
				    } 

		    ?> 
			
		</div>





		<?php 
			$sql="SELECT * from voteforags ORDER BY vote_count_for_ags DESC; ";
			$resultvote = mysqli_query($connct,$sql);//this will excute the query
			$resultCheck =mysqli_num_rows($resultvote);
		?>
		<div class="showposts">
			<h2 style="text-align:center; padding-left:0px; color:#581845"> details of AGS election</h2>
			<?php
			    while($rowvote=mysqli_fetch_array($resultvote)){
			
			    	echo '<div class="singlepost">';
						echo '<div class="posttitle"> Name: ' . $rowvote['ags_name'] . '</div>';
						echo '<div class="postusername">Candidad for : Assistant general secretary</div>';
						echo '<div class="postusername">Total amount of vote for :' . $rowvote['vote_count_for_ags'].'</div>';
						
			        	echo '</div>';
				    } 

		    ?> 
			
		</div>

<div style="margin-top:150px;">
		</div>

<?php
	include_once 'footer.php';
?>