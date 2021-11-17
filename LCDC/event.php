<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events</title>

    <!-- Bootstrap core CSS -->
	
    <link href="css/bootstrap1.css" rel="stylesheet">
    <link href="css/style7.css" rel="stylesheet">

  </head>

  <body>
  <?php include ("navigation.php"); ?>
 
					<hr><h1 class="title">EVENT</h1><hr>
								<div class="container upcoming">
										<div class="row">
									
								<?php
								
										include("connection.php");
										$query = "select * from tbl_event";
										$event = mysqli_query ($dbconnect, $query);

										while($eventcontent = mysqli_fetch_array ($event))
										{
										?>
										
										
									
										<div class="col-md-5">													
													
											<?php
											echo"
											<div>
											<img src='admineventimage /".$eventcontent['image']."' width='450' height='500' alt='eventimage'>
											</div>"?>
											<br>
												</div>
												
												
										<div class="col-md-4 eventcontent">
													<P><h3 class="intro">	<?php echo $eventcontent['title']; ?> </h3></P>
													
										<p style="text-align:jusity;">
										<?php echo 
										$eventcontent['content']; 
										?><br><br>
										<br><br> <br><br>
										<button type="button" onclick="alert('Thank you For your instrest for this event.')" style="background:green; color:white;">Intrested </button>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
										<button  type="button" onclick="alert('Hope we will meet on this event.')" style="background:green; color:white;"> Going </button>
										</p>
										
											</div>
											
										<div class="col-md-3 eventdate">
										<br>
										<p>
										Location:<br>
										<?php echo $eventcontent['Location']; ?> </h5>
										
										</p>
										<p>
										Time: <br>
										<?php echo $eventcontent['time']; ?> </h5>
										</p>
										<p>
										Date: <br>
										<?php echo $eventcontent['date']; ?>
										</p>
										
											</div>
										
										<?php
										}
										?>
										<br>
										
										</div>
										</div>
										

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bundle.js"></script>
<?php include ("footer.php"); ?>
  </body>

</html>
