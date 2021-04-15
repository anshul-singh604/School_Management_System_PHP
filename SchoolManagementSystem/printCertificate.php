<?php
  session_start();
  if(isset($_SESSION['email'])){
  include('includes/connection.php');
  $query = "SELECT * from students WHERE roll_no = '$_POST[roll_no]'";
  $query_run = mysqli_query($connection,$query);
  while($row = mysqli_fetch_assoc($query_run)){
    $roll_no = $row['roll_no'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $father_name = $row['father_name'];
    $dob = $row['dob'];
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script>
      function showAlert() {
      alert ("Hello world!");
      }
  </script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Certificate Page</title>
    <?php
    ?>

  </head>
  <body style="background:url('images/back7.png');background-size:cover;background-attachment: fixed;">
 
    <div class="row">
      <div class="col-md-8 m-auto block">
        <center> <br><br> <br><br>
          <table class="table bordered">
            <tr>
            
            <center><h1><p style="color: blue ; float:center; font-size:50px; font-family:Times New Roman; text-align:center; margin-left: 15px;"><img src="images/L2.jpeg" width="50px" height="50px">&nbsp Holy Faith High School</p></center>

            </tr>
            <tr>
              <td>Name: <?php echo $fname . " " . $lname;?></td>
              <td>Roll No: <?php echo $roll_no; ?></td>
            </tr>
            <tr>
              <td>Father's Name: <?php echo $father_name; ?></td>
              <td>Date of Birth: <?php echo $dob; ?></td>
            </tr>
          </table><hr><br><br></center>
          <p>
            This is to certified that <b>Shri <?php echo $fname . " " . $lname;?></b>
            S/o <b>Shri <?php echo $father_name;?></b> has successfully completed his/her schooling from our school and now he/she is releaved from here to join next.
            Wishing him/her very Best luck for future.</p><br><br><br>
            <p style="text-align:right;">
              Ajay Kumar Singh<br>
              (Head of Office)
            </p>
      </div>
    </div><br><br>
    <center>
      <button type="button" class="btn btn-primary" name="button">Download</button>
      <button type="button" class="btn btn-danger" name="button">Print Result</button>
    </center>
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
