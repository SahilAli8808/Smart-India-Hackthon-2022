 <?php

 $con = mysqli_connect("localhost","root");
  mysqli_select_db($con,'sih');


$q  = "select *from genre";

   $query = mysqli_query($con,$q);

   if(mysqli_num_rows($query)>0){


    while (($result = mysqli_fetch_array($query))) {


      ?>

<h4><span ></span><i class="bi bi-book"></i>
  <?php
           


       echo $result['gname'];

  }

       ?>
  </h4></option>
   <?php

   }
 ?>