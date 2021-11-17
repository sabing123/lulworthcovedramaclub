<!DOCTYPE html>
<html lang="en">

  <head>
  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Review</title>

    <!-- Bootstrap core CSS -->
	
    <link href="css/bootstrap1.css" rel="stylesheet">
    <link href="css/style7.css" rel="stylesheet">





  </head>
  <body>
  <?php include ("navigation.php"); ?>
  
		<div class="container ">
		<div class="row">
		<div class="col-md-6 info">
		<hr>
		<div style="text-align:center">Please provide your review for our School.</div>
		<hr>
			<form method = "post" action = "assignment.php">
			<P>Name <input type = "text" name ="username" required /> </P>
			
			<p><label>Select Classes</label><br>
			<select name="classes" style="background:gray; width:100%; height:50px;">
			<option>Musical Theatre</option>
			<option>Singing</option>
			<option>Dance</option>
			</select>
			</p>
			
			
			
			<label>Review</label>
			<P>
			<textarea name="content" required></textarea>
			</p>
			
			<p><input type="submit" name="submitreview" value="Post Review" > </P>
			
			
			</div>
			</div>
			</div>
			
		 </form>	
		 
		 <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bundle.js"></script>
		 
		 <?php include ("footer.php"); ?>
		 
		</body>
	
	
</html>