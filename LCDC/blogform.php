<html>
<head>
<title>Blog Form</title>
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
			<p>Title<br>
			<input class="title" type="text" name ="title" required>
			</p>
						
					<p>
					<label>Insert Picture </label><br>
					<input type="file" name="img" required />
					</p>
					
					
					<label>Content</label>
			<P>
			<textarea class ="content" name="content" required></textarea>
			</p>
			
			
			<p><input type="submit" value="Post" name="blogsubmit" /></p>

			</form>
		 </div>
						 
   
   </div>
   
   </div>
	

</body>


</html>