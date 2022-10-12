  <?php 

 $data = $_GET['datavalue'];

 $a =array("MUMBAI","PUNE","NAGPUR");
 $b =array("NOIDA","LUCKNOW","GORKHAPUR","KANPUR");
 $a=array("SOUTH DELHI","JANKAPUR","NORTH DELHI","DELHI CENRAL");


 if ($data == "") {
 	foreach ($a as $a1) {
 		
 		echo "<option>$a1</option>";
 	}
 }



 if ($data == "Delhi") {
 	foreach ($c as $a1) {
 		
 		echo "<option>$a1</option>";
 	}
 }





 if ($data == "UP") {
 	foreach ($b as $a1) {
 		
 		echo "<option>$a1</option>";
 	}
 }
 ?> 