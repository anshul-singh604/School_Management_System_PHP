<?php

    require_once('connection1.php');
    
    if(isset($_POST['btn-save']))
    {
        $UserName = mysqli_real_escape_string ($con,$_POST['UserName']);
        $Email = mysqli_real_escape_string($con,$_POST['Email']);
        $Password = mysqli_real_escape_string($con,$_POST['Password']);
        $CPassword = mysqli_real_escape_string($con,$_POST['Cpass']);
        
        if(empty($UserName) || empty($Email) || empty($Password) || empty($CPassword)) 
        {
            echo "<script type='text/javascript'>
            alert('Fill all the fields');
            window.location.href = 'signup.php';
          </script>";
        }
        if($Password!=$CPassword)
        {
            echo "<script type='text/javascript'>
            alert('Enter Same Password');
            window.location.href = 'signup.php';
          </script>";
        }
        else
        {
            $Pass = $Password;
            $sql = "INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES (NULL, '$UserName','$Email' , '$Pass')";
            $result = mysqli_query($con,$sql);
            
            if($result)
            {
                echo "<script type='text/javascript'>
                alert('You have Registered Successfully, will be redirected to login page');
                window.location.href = 'index.php';
              </script>";
            } 
            else
            {
                echo ' Please Check Your Query '; 
            } 
        }
    }   
?>


