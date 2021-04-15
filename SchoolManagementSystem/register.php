<?php
  session_start();
  if(isset($_SESSION['email'])){
  if(isset($_POST['register'])){
    include('includes/connection.php');
    $query = "insert into register values(null,'$_POST[fname]','$_POST[lname]','$_POST[dob]','$_POST[gender]','$_POST[email]',$_POST[mobile],'$_POST[class]','$_POST[address]')";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script type='text/javascript'>
        alert('Registered successfully...');
        window.location.href = 'dashboard.php';
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
        alert('Registeration failed...Plz try again.');
        window.location.href = 'teacher_register.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Registeration</title>
    <script type="text/javascript">
      function resetData(){
        document.getElementById('fname').value = "";
        document.getElementById('lname').value = "";
        document.getElementById('dob').value = "";
        document.getElementById('gender').value = "";
        document.getElementById('email').value = "";
        document.getElementById('mobile').value = "";
        document.getElementById('class').value = "";
        document.getElementById('address').value = "";
      }
    </script>
  </head>
  <body style="background:url('images/login6.jpg');background-size:cover;background-attachment: fixed;">
    <?php include('includes/header.php');?><br>
    <div class="row">
      <div class="col-md-4 m-auto">
        <center><h4><u>Student new Registeration Form</u></h4></center><br>
        <div class="container">
        	<form action="" method="POST">
    				<div class="form-group">
    			    <label for="name">First Name:</label>
    			    <input type="text" class="form-control" name="fname" placeholder="Enter First Name" id="fname" required="">
    				</div>
            <div class="form-group">
    			    <label for="name">Last Name:</label>
    			    <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" id="lname" required="">
    				</div>
            <div class="form-group">
    			    <label for="name">DOB:</label>
    			    <input type="date" class="form-control" name="dob" id="dob" required="">
    				</div>
            <div class="form-group">
              <label>Gender:</label>
              <select class="form-control" name="gender" id="gender" required="">
                  <option>-Select-</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Transgender</option>
              </select>
            </div>
            <div class="form-group">
    			    <label for="name">Email ID:</label>
    			    <input type="email" class="form-control" name="email" placeholder="Enter email ID" id="email" required="">
    				</div>
            <div class="form-group">
    			    <label for="name">Mobile No:</label>
    			    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No" id="mobile" required="">
    				</div>
            <div class="form-group">
    			    <label for="name">Class:</label>
    			    <input type="text" class="form-control" name="class" placeholder="Enter Subject" id="class" required="">
    				</div>
            
            <div class="form-group">
              <label>Address:</label>
              <textarea name="address" rows="4" cols="80" placeholder="Enter Address Here..." id="address"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="register">Register</button>&nbsp;&nbsp;
            <button type="button" class="btn btn-danger" name="reset" onclick="resetData()" >Reset</button>
          </form><br><br>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
}
else{
  echo "<script type='text/javascript'>
    window.location.href = 'index.php';
  </script>";
}
?>
