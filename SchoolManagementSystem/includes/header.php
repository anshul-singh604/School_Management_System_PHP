<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> 
  	<script type="text/javascript" src="bootstrap/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <style>
    .container-fluid .nav-link{
      color: #e9e511;
    }
    
    a:hover {
        color: #e9e511;
      }
    

    </style>
</head>
<body>
  <section>
    <div class=colm>
</div>
      <div class="row" id="header">
        <div class="col-md-4">
        <h1>Holy Faith High School</h1>
        </div>
      </div>

  </section>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#984915;">
		<div class="container-fluid">
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
		        <a class="nav-link" href="dashboard.php" style="color:white;">Home</a>
		      </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:white;" >Manage students</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="student_register.php">Add student</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="editStudent.php">Edit student</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="searchStudent.php">Search student</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="deleteStudent.php">Delete student</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="viewAllStudents.php" target="_blank">Print student list</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown"  style="color:white;">Manage Teachers</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="teacher_register.php">Add teacher</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="editTeacher.php">Edit teacher</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="searchTeacher.php">Search teacher</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="deleteTeacher.php">Delete teacher</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="viewAllTeachers.php" target="_blank">Print teacher list</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown"  style="color:white;">Manage Results</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="addResult.php">Add results</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="searchResult.php">Search Result</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="deleteResult.php">Delete Result</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" target="_blank" href="printResult.php">Print Result</a>
            </div>
          </li>
					<li class="nav-item">
		        <a class="nav-link" href="Certificate.php"  style="color:white;">Generate Certificate</a>
		      </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown"  style="color:white;">Manage Fees</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="payFee.php">Pay fee</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="feePaidList.php" target="_blank">Who has paid ?</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="feeNotPaidList.php" target="_blank">Who hasn't paid ?</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"  style="color:white;">Logout</a>
          </li>
		    </ul>
		</div>
	</nav>
</body>
</html>
