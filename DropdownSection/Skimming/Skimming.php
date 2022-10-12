<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Read for speed - Exercise </title>
  <script src="js/exer.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script>
    var timeLeft = 30;
    var elem = document.getElementById('some_div');

    var timerId = setInterval(countdown, 1000);

    function countdown() {
      if (timeLeft == -1) {
        clearTimeout(timerId);
        doSomething();
      } else {
        elem.innerHTML = timeLeft + ' seconds remaining';
        timeLeft--;
      }
    }
  </script>

  <style>
    .wrapp{
 
 height: 70px;
 background-color: #1B2631;
}

#imglogo
{
 margin-top: -105px;
 margin-left: -20px;
}
body{
  background-color: #2e4052;
}
  
    </style>
</head>

<body>
<header class="wrapp">

 
<div>   
<a href="../index.php"> 
        <img id="imglogo" src="../images/logo.png"  alt="img" width="300px" height="300px"> </a> 
        </div>

</header>
<h2 align="center" style="color:white">Exercise 3: Skimming Exercise </h2>

  <div class="box">
    <!-- <p> You will be shown a image for a short duration  quickly read the important text to get the general idea</p> -->
            <div class="btn1" id="btn">
          <button type="button" class="btn-click" onclick="timerfun()">Start</button>
          </div>
  </div>
    <div class="photos" id="img" style="display:none;">
      <li> <img src="./images/img1.jpg" height="500px"></li>
      <li>Time:<span id="time" style="color: white;">0</span>sec</li>
    </div>
    <div id="some_div">
    </div>
    <!-- <button type="button" class="btn-click"> Start </button> -->

    <div id="ques" style="display:none;">
          
  <!-- copy paste  -->
        
     <?php include 'skimming_quiz.php'  ?>
    
  </div>


</div>
</body>
<script>

</script>
</html>