<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forum</title>

    <!-- Bootstrap core CSS -->
	
    <link href="css/bootstrap1.css" rel="stylesheet">
    <link href="css/style7.css" rel="stylesheet">
				<link href="css/font-awesome.min.css" rel="stylesheet" >
  </head>

  <body>
  			
  
  <?php include ("navigation.php"); ?>
		<div class="container ">
		<div class="row">
		<div class="col-md-12 forum">
		<hr>
		<h1>
		<p style="text-align:center; color:black;">Community forum</p>
		</h1>
		<hr>
			<form method = "post" action = "assignment.php">
			
			
			<P>Email<p></p> <input type = "text" name ="email" required /> </P>
			
			<P>Ask Question</p><p> <input type = "text" name ="ques" required />	</p>
<p>			
			 <input type = "submit" value="Post Question" name="submitquestion"/> </P>
			 
			
			 </form>
			 
			  </div>
			 </div>
			 </div>
			 
			 <div class="container ">
		<div class="row">
		<div class="col-md-12 forum">
			 
			 <?php
							
			 
									include("connection.php");
										$ques = "select * from tbl_forum";
										$question = mysqli_query ($dbconnect, $ques);

										while($communityquestion = mysqli_fetch_array ($question))
										{
										?>
										<p>
										<div>
										<div><h2><?php echo $communityquestion['question']; ?></h2></div>
										<div>Date:<?php echo $communityquestion['Date']; ?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											by:<?php echo $communityquestion['email']; ?></div>
											
											
										</div>
										
											<form method = "post" action = "assignment.php">
			
										<P></p> <p> <input type = "text" name ="ans" required /></p><P>	
										<input type = "submit" value="Replies" name="submitanswer" /></p>
										<hr>
										<?php
												include("connection.php");
												
												$ans = "select * from tbl_ans";
													$answer = mysqli_query ($dbconnect, $ans);
													
													

												while($communityanswer = mysqli_fetch_array ($answer))
												{
														?>									
														<?php echo $communityanswer['Answer']; ?><br>
															<?php echo $communityanswer['date']; ?>
														
												</P>
													<?php } ?>
													</form>
				
										<br>
			<?php } ?>
			
			</div>
			</div>
			</div>
			
			
			
			
					 
		 <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bundle.js"></script>
		 
		 <?php include ("footer.php"); ?>
		</body>
	
	
</html>