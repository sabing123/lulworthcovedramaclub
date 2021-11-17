<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>

    <!-- Bootstrap core CSS -->
	
    <link href="css/bootstrap1.css" rel="stylesheet">
    <link href="css/style7.css" rel="stylesheet">
	<link rel="stylesheet" href="css/icon.css">
  </head>

  <body>
  			
<?php
session_start();
if (!isset($_SESSION['pass']))
{
	header("location:index.php");
}
?>
<div class="container">
							<div class="row">
								<div class="col-md-12" style="text-align:center; color:blue;">
<p>
<hr><h1>Welcome to information page.....................................<hr></h1>
<p>
</div>
</div>
</div>
	<?php
    include("connection.php");
    $id = $_GET['id'];
    $query = "select * from tbl_registration where id ='$id'";
    $res = mysqli_query ($dbconnect, $query);
while($altering = mysqli_fetch_array($res))
{
?>
<p>
						<div class="container upcoming">
													<div class="row">
														<div class="col-md-12">
						<table>
						<tr>
						<th>Parent Name</th>
						<th>Child Name</th>
						<th> Date of Birth</th>
						<th>Parent Email</th>
						<th>Password</th>
						<th>Address</th>
						<th>Number</th>
						<th>Class</th>
						</tr>	
						<tr>							
						<td><?php echo $altering['PName']; ?></td>
						<td><?php echo $altering['CName']; ?></td>
						<td><?php echo $altering['DOB']; ?></td>
						<td><?php echo $altering['Pemail']; ?></td>
						<td><?php echo $altering['password']; ?></td>
						<td><?php echo $altering['PAddress']; ?></td>
						<td><?php echo $altering['Pnumber']; ?></td>
						<td><?php echo $altering['Classes']; ?></td>

							<?php $uid = $altering['id']; ?>
							</div>
							<div class="col-md-4">	
							<td><a href = "update.php?uid=<?php echo $uid; ?>">Edit </a></td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						<td><a href = "delete.php?uid=<?php echo $uid; ?>">Delete </a> </td>
						</tr>
						</table>
						</div>
						</div>
						</div>
						</p>
						<?php
						}
						?>
						<div class="container">
													<div class="row">
													<div class="col-md-4">
													</div>
														<div class="col-md-4">
						<P><a href="logout.php"><input type="button" class="btn btn-info btn-danger" value="Log Out"/></a></p>
						<div>
						</div>
						</div>
						</body>
						</html>