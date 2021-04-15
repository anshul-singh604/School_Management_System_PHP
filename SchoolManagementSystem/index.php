<?php
	session_start();
  if(isset($_POST['login'])){
    include('includes/connection.php');
    $query = "select * from admin where email = '$_POST[email]' AND password = '$_POST[password]'";
  	$query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
			$_SESSION['email'] = $_POST['email'];
			while($row = mysqli_fetch_assoc($query_run)){
				$_SESSION['name'] = $row['name'];
			}
      echo "<script type='text/javascript'>
      	window.location.href = 'dashboard.php';
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
      	alert('Please enter correct email and password.');
      	window.location.href = 'index.php';
      </script>";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body style="background:url('images/school_img3.jpg');background-size:cover;background-attachment: fixed;">
	<header>
		<div class="main">
		   
			<!-- <div class="logo"></div>
			<img src="E:\study material\HTML class\library project\LPU LOGO.jpg" alt="logo"> -->
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="contact.php">CONTACT US</a></li>
				<li><a href="location.php">LOCATE US</a></li>
				<li><a href="signup.php">SIGN UP</a></li>
			</ul>
		</div>
	</header>
<div class="box">
	<h1>Login</h1>
	<form action="" method="post">
		<div class="inputbox">
			<input type="text" id=a name="email" required="">
			<label>Username</label>
		</div>
			<div class="inputbox">
			<input type="password" id=b name="password" required="">
			<label> Password </label>
		    </div>
		    <input type="submit" name="login" value="LOGIN" >
	</form>
</body>
</html>


