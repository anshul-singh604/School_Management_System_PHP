<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/signup.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet" >
<title>Registration Form Using HTML5 and CSS3</title> 
</head> 
<body style="background:url('images/school_img3.jpg');background-size:cover;background-attachment: fixed;">
 <header>
    <div class="main">
      <!-- <div class="logo"></div>
      <img src="E:\study material\HTML class\library project\LPU LOGO.jpg" alt="logo"> -->
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="../bakery\contact us.html">CONTACT US</a></li>
        <li><a href="index.php">LOGIN</a></li>
      </ul>
    </div>
  </header>
<div class="box">
  <h1><b>SIGNUP</b></h1>
    <form action="process.php" method="post">
    <div class="inputbox">
        <input type="text" placeholder=" User Name" class="txt" name="UserName" required=""><br><br>
        <input type="email" placeholder=" Email" class="txt" name="Email" required=""><br><br>
        <input type="password" placeholder=" Password" class="txt" name="Password" required=""><br><br>
        <input type="password" placeholder=" Confirm Password" class="txt" name="Cpass" required=""><br><br>
         <div class="signup">
        <button type="submit" class="btn" name="btn-save">Register</button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <button type="reset">Reset</button>
           </div>
        </div>
        <!--<a href="#"> Already Hava a Account</a> -->
    </form> 
    </div> 
</body>
</html> 
