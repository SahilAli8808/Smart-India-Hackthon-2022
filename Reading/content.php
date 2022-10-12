<?php 


 $data = $_GET['datavalue'];
  
  echo $data;

 $con = mysqli_connect("localhost","root");
  mysqli_select_db($con,'sih');


$q  = "select *from exercise";

   $query = mysqli_query($con,$q);
   

   if(mysqli_num_rows($query)>0){
    while (($result = mysqli_fetch_array($query))) {
   
         // if ($result['rcontent']==$data) {
        
      
?>

      <h1><?php echo $result['rcontent']; ?></h1>
       <p><?php echo $result['mcontent']; ?></p>


<?php    
}
    
 }


?> 