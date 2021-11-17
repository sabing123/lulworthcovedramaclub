<!DOCTYPE html>
<html lang="en">

  <head>
  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>

    <!-- Bootstrap core CSS -->
	
    <link href="css/bootstrap1.css" rel="stylesheet">
    <link href="css/style7.css" rel="stylesheet">
	<link rel="stylesheet" href="css/icon.css">





  </head>
  <body>
  <?php include ("navigation.php"); ?>

   
   
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bundle.js"></script>

	
					
					<?php
					include("connection.php");
					$query = "select * from tbl_blog";
					$blog = mysqli_query ($dbconnect, $query);

					while($blogcontent = mysqli_fetch_array ($blog))
					{
					?>
					
					
						<div class="container card">
						<div class="row">
							<div class="col-md-4">
							 <h2 class="blogheading"> <?php echo $blogcontent['title']; ?> </h2>
							 <h5> <?php echo $blogcontent['date']; ?> </h5>
							 <?php
							 echo"
							 <div class='fakeimg'>
							<img class='img-blog' src='adminblogsimage /".$blogcontent['image']."' alt='blogimage'>
										</div>"?>								
						</div>
								<div class="col-md-8 card">	
								<p style="text-align:jusity;">								
							<?php echo $blogcontent['Content']; ?>
							</p>

					</div>

					</div>

					</div>

					<?php
					}
					?>
					<br>
					<?php include ("footer.php"); ?>
  
  </body>

</html>
