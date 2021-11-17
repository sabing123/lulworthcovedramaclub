<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login Form</title>

    <!-- Bootstrap core CSS -->
	
    <link href="css/bootstrap1.css" rel="stylesheet">
    <link href="css/style7.css" rel="stylesheet">
				<link href="css/font-awesome.min.css" rel="stylesheet" >
  </head>

  <body>
  		
<?PHP
$local_user = "admin"; 
$local_password = "admin"; 
if (isset($_POST['login'])) // check if user enter submit
{
    $u_post = $_POST['username']; // get user input 
    $p_post = $_POST['password']; // get password input 

    if ($local_user == $u_post) 
    {
        if ($local_password == $p_post) 
        {
           header("location:admindashboard.php") ;
            die(); //you can arrive the user to welcome page from here 
        }
        echo "password is not correct !"; // if username is correct but password is not
        die(); 
    }
    else 
    {
        echo "username is not correct !";  // if username is not correct then no need to check password ! .
        die(); 
    }
}
?>

  <div class="container">
	<div class="rows">
<div class="col-md-5">	
<h1>Admin Login Form</h1>
    <form class="login"  action="" method="POST" >
	<label> User Name</label>
        <input type="text"  name="username" placeholder="Enter username" /> 
        </br> 
		<label> Password </label>
        <input type="password" name="password" placeholder="Enter password" />
        </br> 
        <input type="submit" name="login" /> 
    </form>
	</div>
	</div>
</div>
 
 </body>
 </html>