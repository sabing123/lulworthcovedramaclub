			
			
			<?php
			include("connection.php");
			$id = $_GET['uid'];
			$query = "select * from tbl_registration where id ='$id'";
			$res = mysqli_query($dbconnect,$query);
			$data = mysqli_fetch_array($res);
			?>


			<form method="post" action="assignment.php">
			<label>Update information</label>
			<p><label>Parent Name</label>  &nbsp; &nbsp;    <input type="text" name="pn" value="<?php echo $data['PName']; ?>" /> </P>
			<p><label>Child Name</label>  &nbsp; &nbsp;    <input type="text" name="cn" value="<?php echo $data['CName']; ?>" /> </P>
			<p><label>Date Of Birth</label>  &nbsp; &nbsp;    <input type="text" name="db" value="<?php echo $data['DOB']; ?>" /> </P>
			<p><label>Parent Email</label>  &nbsp; &nbsp;    <input type="text" name="pe" value="<?php echo $data['Pemail']; ?>" /> </P>
			<p><label>Password</label>  &nbsp; &nbsp;    <input type="text" name="p" value="<?php echo $data['password']; ?>" /> </P>
			<p><label>Address</label>  &nbsp; &nbsp;    <input type="text" name="add" value="<?php echo $data['PAddress']; ?>" /> </P>
			<p><label>Number</label>  &nbsp; &nbsp;    <input type="text" name="pnum" value="<?php echo $data['Pnumber']; ?>" /> </P>
			<p><label>Class</label>  &nbsp; &nbsp;    <select name="class" value="<?php echo $data['Classes']; ?>" > 
			<option>Dancing</option>
			<option>Singing</option>
			<option>Musical Threatre</option>

														</select>

			</P>
			<p><input type="hidden" name="id" value="<?php echo $data['id']; ?>" /> </P>
			<p><input type="submit" name="alterinfo" onclick="alert('Thank you for editing your information. Please Login Again to See your edit information')" value="Edit" /> </p>
			</form>