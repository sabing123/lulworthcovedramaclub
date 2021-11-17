<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Where</title>

    <!-- Bootstrap core CSS -->
	
    <link href="css/bootstrap1.css" rel="stylesheet">
    <link href="css/style7.css" rel="stylesheet">




  </head>

  <body>
  <?php include ("navigation.php"); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bundle.js"></script>
	
	<div class="container">
						<div class="row">
						
							<div class="col-md-8">
								<h1>You can find our location in this map</h1>
	<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.650937599576!2d-0.5233039842289096!3d51.53796187964016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48766fb4e67b2183%3A0x3f354fb3bb6797d!2sIver+Heath+Drama+Club!5e0!3m2!1sen!2snp!4v1546400888100"></iframe>
</div>
	
			<div class="col-md-4 booking">
			  <h2>Booking For Class</h2>
			   <form method="post" action="assignment.php">
				<div class="form-group">
				  <label for="name">First Name:</label>
				  <input type="text" class="form-control" id="name" placeholder="Enter First Name" name="fname" required>
				</div>
				<div class="form-group">
				  <label for="name">Last Name:</label>
				  <input type="text" class="form-control" id="name" placeholder="Enter Last Name" name="lname" required>
				</div>
				<div class="form-group">
				  <label for="">Email:</label>
				  <input type="text" class="form-control" id="email" placeholder="Enter your Email" name="email" required>
				</div>
				
				<div class="form-group">
				  <label for="username">Address:</label>
				  <input type="text" class="form-control" id="address" placeholder="Enter Your Address" name="address" required>
				  <div id="mydiv"> </div>
				</div>
				<div class="form-group">
				  <label for="phone">Phone Number:</label>
				  <input type="phone" class="form-control" id="phone" placeholder="Enter Your Phone Number" name="phone" required>
				</div>
				<p><label>Choose Class:</Label><br>
						  <select name="class">
						  <option>Musical Theatre</option>
						 <option>Singing</option>
						 <option>Dancing</option>
						 </select>
						  </p>

			  <button type="submit" class="btn btn-primary" name="booking" onclick="alert('Thank you For Booking Class.')">Booking</button>
			  </form>
				</div>
	
</div>
</div>
<?php include ("footer.php"); ?>
  </body>

</html>
