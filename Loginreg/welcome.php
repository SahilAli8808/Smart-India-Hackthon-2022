<?php
     
  $conn = mysqli_connect('localhost',"root",'','sih');
  
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
  
     $q = "INSERT INTO signup (fname,lname,email,password) VALUES ('$fname','$lname','$email','$pass');";
     if (mysqli_query($conn, $q)) {
        echo "New record created successfully";
        header('location:login.php');
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
    // mysqli_query($conn, $q);
    mysqli_close($conn);

  }

?>