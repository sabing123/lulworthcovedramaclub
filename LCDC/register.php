<!DOCTYPE html>
<html lang="en">

  <head>
  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <!-- Bootstrap core CSS -->
	
    <link href="css/bootstrap1.css" rel="stylesheet">
    <link href="css/style7.css" rel="stylesheet">

	
	<script>

function load()
{
	
	
	var txt =  document.getElementById('txt').value;
	var req;
	if(window.XMLHttpRequest)
	{
		req = new XMLHttpRequest();
		
	}
	else req = new ActiveXObject("Microsoft.XMLHTTP");
	req.onreadystatechange = function()
	{
		if(req.readyState==4)
		{
		
		document.getElementById('mydiv').innerHTML = req.responseText;
		}
	}
req.open("GET", "assignment.php?val="+txt, true)
req.send();

     
}

</script>
 

  </head>

  <body>
  
      <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bundle.js"></script>
	
		<?php include ("navigation.php"); ?>

		<div class="container ">
		<div class="row">
		<div class="col-md-6 form-wrap">
				<form method="post" action="assignment.php">

			<p><label>Parent Name </label> <input type ="text" name="Pname" required />
			</P>
			<p><label>Child Name</label> <input type ="text" name="Cname" required />
			</P>
			<p><label>Date of Birth </label> <input type ="date" id="date" name="DOB" class="custom-select" min="0" required /></p>
			<p>
		<script src="js/age.js"></script>
				<script text="type/javascript">
							  $(document).ready(function(){
						
							   $("#date").change(function(){
							   var value = $("#date").val();
								var date = new Date(value);
								var today = new Date();
								var age = Math.floor((today-date) / (365.25 * 24 * 60 * 60 * 1000));
								if(isNaN(age)) {

								// will set 0 when value will be NaN
								 age=0;

								}
								else{
								  age=age;
								}
								$('#age').val(age);
								});
							   });
							</script>
		
							<div>
							  <label for="">Age:</label>
							  <input type="number" id="age" min="0" placeholder="Auto Calculation Your Age" name="age" required>
							</div>
	</p>
			
			<p><label>Parent Email </label> <input type ="text" name="Pemail"  id="txt" onkeyup="load()" required >
			<div id="mydiv"> </div>
			</P>
			<p><label>Password </label> <input type ="password" name="psw" required >
			
			</P>
			<p><label>Parent Address </label> <input type ="text" name="Paddress" required />
			</P>
			<p><label>Parent Phone Number </label> <input type ="text" name="Pnumber" required />
			</P>
			
			<p><label>Select Classes</label>
			<select name="classes" class="custom-select" >
			<option>Musical Theatre</option>
			<option>Singing</option>
			<option>Dance</option>
			</select>
			</p>
		
			
			<label>Comments</label>
			<P>
			
			<textarea name="comments" class="custom-select" style="height:200px" ></textarea>
			</p>
			<p><input type="submit" name="register" value="Register" > </P>

</form>
						</div>
						</div>
						 </div>

   
   


	<?php include ("footer.php"); ?>

  </body>
</html>
