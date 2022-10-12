<?php 


 $data = $_GET['datavalue'];
  // $var = intval($data);
  // echo  $data;

 $con = mysqli_connect("localhost","root");
  mysqli_select_db($con,'sih');


$q  = "select *from items_historical";

   $query = mysqli_query($con,$q);


   if(mysqli_num_rows($query)>0){


    while (($result = mysqli_fetch_array($query))) {



            // if($result['gname']==$data) {
                // echo $result['gname'];
            
                ?>

   <li class="bookItem" id="bookItem">

               <span><?php echo $result['rid'] ?></span>
                <img src="<?php echo $result['img']; ?>"/>
                <h5 id="clickCont">
                     
                    <?php echo $result['rcontent'] ?><br>

                      <div class="subtitle"><?php echo $result['content'] ?></div>
                      <i class="bi ReadListRead bi-book-half" ></i>
                </h5>
</li>              

              <?php 
            }
        // }

           
    
}

?>