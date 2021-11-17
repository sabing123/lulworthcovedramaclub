<?php
session_start();
include("connection.php");

	// disabling login form for 3 minutes

	if(isset($_POST['login']))
	{
			$emailparents = $_POST['pe'];
			$key = $_POST['p'];
			$q="select * from tbl_registration where pemail='$emailparents' and password='$key'";
			$login=mysqli_query($dbconnect,$q);
			$l=mysqli_fetch_array($login);
			$count= mysqli_num_rows($login);
			
			if ($count>0)
			{
				$_SESSION['pass']=1;
				$id=$l['id'];
			    header("location:dashboard.php?id=$id");

			}
			else
			{
				
				if (!isset($_COOKIE['attempt']))
				{
					setcookie('attempt',1,time()+180);
				}
				else
				{
					$count= $_COOKIE['attempt']+1;
					setcookie('attempt',$count,time()+180);
					
				}
			header("location:index.php");
			}
	}
// end of login form 


	// register form
if(isset($_POST['register']))
	{
		
		$name=$_POST["Pname"];
		$childname=$_POST["Cname"];
		$birthday=$_POST["DOB"];
		$age=$_POST["age"];
		$email=$_POST["Pemail"];
		$pass=$_POST["psw"];
		$address=$_POST["Paddress"];
		$number=$_POST["Pnumber"];
		$classes=$_POST["classes"];
		$comments=$_POST["comments"];
		
			$registerquery ="insert into tbl_registration values(null,'$name','$childname','$birthday','$age','$email','$pass','$address','$number','$classes','$comments')";
		
		mysqli_query($dbconnect,$registerquery);
		header("location:index.php");
	}

		
////////////////////////Ajax method///////////////
		if(isset($_GET['val']))
	{
		
		if(!empty($_GET['val']))
		{
		$Email = $_GET['val'];
		$q = "select * from tbl_registration where pemail = '$Email'";
		$r=mysqli_query($dbconnect,$q);
		$count = mysqli_num_rows($r);
		
		
		if($count>0)
		{
			echo "The user name already exits! please try again.";
		}
		}	
	}

	

	

// cookie
		
		
	if(isset($_GET['cookie']) and $_GET['cookie']==1)
	{
		
		setcookie('cookie_yes','yes',time()+60);
			header("location:index.php",time()+60);
		
		
	}
	
	// Sbscribe Newsletter
	
	if(isset($_POST['subscribe']))
	{
		$subemail=$_POST["newemail"];
		
		$subscribeemail ="insert into tbl_signup values('2','$subemail')";
		
		mysqli_query($dbconnect,$subscribeemail);
		header("location:index.php");
	}
	
	
	

	// blog
	
	
	// insert blog
	
	if(isset($_POST['blogsubmit']))
	{			
							$title=$_POST["title"];
							$content=$_POST["content"];
			
							// upload image to  folder
							$pic=$_FILES['img']['name'];
							//Get the content of the image and then add slashes to it 
								
							$file=$_FILES['img']['name'];
							$time=time('s');
							$d=date('Y');
							$m=date('M');
							$day=date('d');

							$rename = "img_".$d."_".$m."_".$day."_".$time."_".$file;
							$exe = pathinfo($file,PATHINFO_EXTENSION);

							if($exe=="jpg" || $exe=="png" || $exe=="gif")
							{
							move_uploaded_file($_FILES['img'] ['tmp_name'] ,"adminblogsimage /".$rename);
							}
							else
							{
								echo"Invalid file format";
							}
							// date
								$date=date("Y-m-d");
							// insert
								$blogquery ="insert into tbl_blog values(null,'$title','$rename','$content','$date')";
								mysqli_query($dbconnect,$blogquery);		
								header("location:blogform.php");
		
	}
	
	
	
	
	// Events
	
	
	// insert Events
	
	if(isset($_POST['eventsubmit']))
	{
								
										// upload image to  folder
									$pic=$_FILES['photo']['name'];
									
									//Get the content of the image and then add slashes to it 
											
										$file=$_FILES['photo']['name'];
										$time=time('s');
										$d=date('Y');
										$m=date('M');
										$day=date('d');

										$newname = "img_".$d."_".$m."_".$day."_".$time."_".$file;


										$exe = pathinfo($file,PATHINFO_EXTENSION);

										if($exe=="jpg" || $exe=="png" || $exe=="gif")
										{
										move_uploaded_file($_FILES['photo'] ['tmp_name'] ,"admineventimage /".$newname);
										}
										else
										{
											echo"Invalid file format";
										}
										
				$title=$_POST["title"];
				$content=$_POST["content"];
				$location=$_POST["location"];
				$date=date("Y-m-d");
				 $time=htmlentities($_POST['time']);
				 $eventquery ="insert into tbl_event values(null,'$newname','$title','$content','$location','$date','$time')";
				mysqli_query($dbconnect,$eventquery);	
							
												
		header("location:admineventform.php");
		
	}
	// forum
	if(isset($_POST['submitquestion']))
	{	
		$e = $_POST['email'];
		
		$q = $_POST['ques'];
		$date=date("Y-m-d");
		$forumquery = "insert into tbl_forum values (null,'$e','$q','$date')";
		
				mysqli_query($dbconnect,$forumquery);
					header("location:forum.php");
	
	
	}
	if(isset($_POST['submitanswer']))
	{	
		$a = $_POST['ans'];
		$date=date("Y-m-d");
		$forumquery = "insert into tbl_ans values (null,'$a','$date')";
		
				mysqli_query($dbconnect,$forumquery);
					header("location:forum.php");
	
	
	}
	
	// end forum
	
	// review
	if(isset($_POST['submitreview']))
	{
		$usrname = $_POST['username'];
		$class = $_POST['classes'];
		$review = $_POST['content'];
			$reviewquery = "insert into tbl_review values (null,'$usrname','$class','$review')";
				mysqli_query($dbconnect,$reviewquery);
					header("location:review.php");
	}
	
	
	// end reveiw
	if(isset($_POST['alterinfo']))
	{

	include("connection.php");

$pname = $_POST['pn'];
$cname = $_POST['cn'];
$birthday = $_POST['db'];
$email = $_POST['pe'];
$pass = $_POST['p'];
$add = $_POST['add'];
$num = $_POST['pnum'];
$class = $_POST['class'];
$id = $_POST['id'];
$updatequery= "update tbl_registration set PName = '$pname',CName = '$cname',DOB = '$birthday',Pemail = '$email',password = '$pass', PAddress = '$add', Pnumber= '$num',Classes = '$class' where id ='$id'";
mysqli_query($dbconnect,$updatequery);

		header("location:index.php");
	}
	//for booking
	if(isset($_POST['booking']))
	{
		
		$firstname=$_POST["fname"];
		$lastname=$_POST["lname"];
		$email=$_POST["email"];
		$address=$_POST["address"];
		$phone=$_POST["phone"];
		$classes=$_POST["class"];
		
		$registerquery ="insert into tbl_booking values(null,'$firstname','$lastname','$email','$address','$phone','$class')";
		
		mysqli_query($dbconnect,$registerquery);
		
		header("location:where.php");
	}
	


?>




