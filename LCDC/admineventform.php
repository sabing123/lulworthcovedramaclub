<html>
<head>
<title>Event Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap core CSS -->
	
    <link href="css/bootstrap1.css" rel="stylesheet">
    <link href="css/style7.css" rel="stylesheet">
</head>
<body>



  <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bundle.js"></script>
	
	
	
	<div class="container">
   <div class="row">
     <div class="col-md-7 blogform">
					
					
			<form method="post" action="assignment.php"  enctype="multipart/form-data">
					<p>
					<label>Insert Picture </label><br>
					<input type="file" name="photo" required />
					</p>
			<p>Event Title<br>
			
			<input class="title" type="text" name ="title" required />
			</p>
						
			<label>Content</label>
			<P>
			<textarea class ="content" name="content" required></textarea>
			</p>
			<label>Location</label>
			<P>
			<input type="text" name="location" required />
			</p>
			<P>
			
			<label>Time:</label>
			<input type="date" name="date" />
			<input type="time" name="time" />
				</P>
					
					
			
			
			<p><input type="submit" value="Post" name="eventsubmit" /></p>

			</form>
		 </div>
						 
   
   </div>
   
   </div>
	
</body>


</html>