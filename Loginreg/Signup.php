<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReadforSpeed- Sing UP</title>
   
</head>
<body>


<header class="wrapper">

 
    <h1 class="logo"><a href="../index.php"> 
        <img src="../images/logo.png"  alt="img" width="300px" height="300px"> </a> </h1>
 

</header>
<section class="sctn">
    <form action="welcome.php" method="POST">
          <div class="heading">
              <h2>Sign Up</h2>
              <hr>
              </div>
          <div class="text-field">
            <label>First Name</label>
              <input type="text" name="firstname" >
              
          </div>
          <div class="text-field">
            <label>Last Name</label>
            <input type="text" name="lastname" >
            
        </div>
        <div class="text-field">
            <label>Email</label>
            <input type="text" name="email" >
          
        </div>
        <div class="text-field">
            <label>Password</label>
            <input type="password" name="pass">
           
        </div>
        <div class="text-field">
            <label>Confirm Password</label>
            <input type="password" name="pass" >
            
        </div>
        <div class="term"> 
            <input type="checkbox" class="chbox">
            <label>I Agree to Term & Condition</label>

        </div>
        <button type="submit" class="btn-card-head2">Submit</button>

            
        </div>
        <div class="haveac">
            Already Have a account? <a href="login.php">Log In</a>
            <p> By clicking the submit button you accept our term and Condition</p>
        </div>


       
    
    </form>
</section>
        


    
</body>
</html>