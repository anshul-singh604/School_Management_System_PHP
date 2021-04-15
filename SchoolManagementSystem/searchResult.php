<?php
  session_start();
  if(isset($_SESSION['email'])){
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include('includes/header.php'); ?>
    <title></title>
  </head>
  <body style="background:url('images/login4.jpg');background-size:cover;background-attachment: fixed;">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4"><br>
        <h4>Search Result of a student</h4><br><br>
        <form action="showResult.php" method="post">
          <div class="form-group">
            Roll No: <input type="text" name="roll_no" placeholder="Enter Roll No...">
            <input type="submit" name="search_by_roll_no" value="Search">
          </div>
        </form>
      </div>
      <div class="col-md-4">
      </div>
      <div class="col-md-2"></div>
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