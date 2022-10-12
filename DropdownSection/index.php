<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form submit using Ajax</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="
	sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
	</script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../css/style2.css">

</head>

<body>


<?php include '../nav_bar.php';?>




    <div class="container mt-52">

		<div class="row">

			<div class="col-lg-12 "><br>

				<h3 class="text-dark text-center ">Choose your grade to start reading! </h3>
				<hr>
				
<div class="alert alert-primary" role="alert">
  Choose any one —click on submit button!
</div>
				<form>
					<div class="form-group mb-3">
						<label>Choose Your Grade :&nbsp;&nbsp;</label>
						<select id="dropdown" class="form-control">
 		  	  	 	       <option>Select Grade</option>
 		  	  	 	       <option val=" 1">Grade 1 (6-7 Year Old)</option>
 		  	  	 	       <option val=" 2">Grade 2 (7-8 Year Old)</option>
 		  	  	 	       <option val=" 3">Grade 3 (8-9 Year Old)</option>
 		  	  	 	       <option val=" 4">Grade 4 (9-10 Year Old)</option>
 		  	  	 	       <option val=" 5">Grade 5 (10-11 Year Old)</option>
 		  	  	 	       <option val=" 6">Grade 6-8 (11-14 Year Old)</option>
 		  	  	 	       <option val=" 7">Grade Highschool (14-18 Year Old)</option>
 		  	  	 	       <option val=" 8">Grade College (18-23 Year Old)</option>
 		  	  	 	       <option val=" 9">Grade Adults (23+ Year Old)</option>
							
						</select>
					</div>
					<button onclick= "clickFun()" type="submit" class="btn btn-primary" id="btn-new">Submit</button>
				</form>
			
			</div>

		</div>
	</div>



	<script type="text/javascript">
		function clickFun(){
			var value = document.getElementById("dropdown");  
			var getvalue = value.options[value.selectedIndex].value;  
			var gettext = value.options[value.selectedIndex].text;  

			if (getvalue == "Grade 1 (6-7 Year Old)") {
				window.open("./Exercise1.php")
			}
			// if (getvalue == "Level 2") {
			// 	document.write(" level 2")
			// }
			// if (getvalue == "Level 3") {
			// 	document.write(" level 3")
			// }
			// if (getvalue == "Level 4") {
			// 	document.write(" level 4")
			// }
			// if (getvalue == "Level 5") {
			// 	document.write(" level 5")
			// }
			// if (getvalue == "Level 6") {
			// 	document.write(" level 6")
			// }
			// if (getvalue == "Level 7") {
			// 	//    document.write("this is level 4")
			// 	window.open("Level7.php")

			// }
			if (getvalue == "Grade 2 (7-8 Year Old)") {
				window.open("Exercise1.php")
			}
			
		}
</script>
</body>

</html>