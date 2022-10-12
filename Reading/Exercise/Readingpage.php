<?php

   $con = mysqli_connect("localhost","root","","sih");

$genre = "SELECT * FROM genre";
$genre_query = mysqli_query($con, $genre);

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reading Skill</title>

<script type="text/javascript" src="loadingPage.js"></script>

	 <link rel="stylesheet" type="text/css" href="css/style.css">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	   

</head>
<body>


  <header>
  	 
  	 <div class="menu_side">
  	 	  <h1 class="active" style="color:#36e2ec;"><span ></span><i class="bi bi-book"></i><label id="listGenre">Introduction</label></h1>


  	 	  <div class="playlist" id="scroll_bar">

  	 	           <select class="form-select" id="genre" name="genre">
                        <option selected disabled>Select Genre</option>
                        <?php while ($row = mysqli_fetch_assoc($genre_query)) : ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['gname']; ?> </option>
                        <?php endwhile; ?>
                    </select>

  	 	  </div>

  	 	 
  	 	  <!-- book collection -->
  	 	  
<div class="menu_song" id="scroll_bar">
 <h3 align="center">Reading List</h3>
	<div id="bookItem">
		
	</div>

  	 	  	  <li class="bookItem">

<!-- 
  	 	  	  	<span>01</span>
  	 	  	  	<img src="img/history.jpg" alt="Alan" >
  	 	  	  	<h5>
  	 	  	  		 
  	 	  	  		  History of Modern India <br>
  	 	  	  		  <div class="subtitle">Vipin Chandra</div>
  	 	  	  		  <i class="bi ReadListRead bi-book-half" id="1"></i>
  	 	  	  	</h5> -->

  	 	  	  	 <select class="form-select" id="" name='genre'>
                        <option selected disabled>Select Content</option>
                    </select>


  	 	  	  </li>


  	 	  	  <li class="bookItem">
  	 	  	  	<span>02</span>
  	 	  	  	<img src="img/history.jpg" alt="Alan">
  	 	  	  	<h5>
  	 	  	  		 
  	 	  	  		  History of Modern India <br>

  	 	  	  		  <div class="subtitle">Vipin Chandra</div>
  	 	  	  		  <i class="bi ReadListRead bi-book-half" id="2"></i>
  	 	  	  	</h5>
  	 	  	  </li>

	<ul id="list">


  	 	  	  <li class="bookItem">
  	 	  	  	<span>02</span>
  	 	  	  	<img src="img/history.jpg" alt="Alan">
  	 	  	  	<h5>
  	 	  	  		 
  	 	  	  		  History of Modern India <br>

  	 	  	  		  <div class="subtitle">Vipin Chandra</div>
  	 	  	  		  <i class="bi ReadListRead bi-book-half" id="1"></i>
  	 	  	  	</h5>
  	 	  	  </li>

  	 	  	  <li class="bookItem">
  	 	  	  	<span>02</span>
  	 	  	  	<img src="img/history.jpg" alt="Alan">
  	 	  	  	<h5>
  	 	  	  		 
  	 	  	  		  History of Modern India <br>

  	 	  	  		  <div class="subtitle">Vipin Chandra</div>
  	 	  	  		  <i class="bi ReadListRead bi-book-half" id="1"></i>
  	 	  	  	</h5>
  	 	  	  </li>

			<li class="bookItem">
  	 	  	  	<span>03</span>
  	 	  	  	<img src="img/history.jpg" alt="Alan">
  	 	  	  	<h5>
  	 	  	  		 
  	 	  	  		  History of Modern India <br>

  	 	  	  		  <div class="subtitle">Vipin Chandra</div>
  	 	  	  		  <i class="bi ReadListRead bi-book-half" id="1"></i>
  	 	  	  	</h5>
  	 	  	  </li>

		<li class="bookItem">
  	 	  	  	<span>05</span>
  	 	  	  	<img src="img/history.jpg" alt="Alan">
  	 	  	  	<h5>
  	 	  	  		 
  	 	  	  		  History of Modern India <br>

  	 	  	  		  <div class="subtitle">Vipin Chandra</div>
  	 	  	  		  <i class="bi ReadListRead bi-book-half" id="1"></i>
  	 	  	  	</h5>
  	 	  	  </li>



  	 	  </div>

</ul>
		<!-- end book collaction -->
  	 	  

  	 </div>
  	 <div class="song_side">
  	 	
   			<nav>
   				

   				 <ul>
   				 	

   				 	 <li>Beginner <span></span></li>
   				 	 <li>Intermediate</li>
   				 	 <li>Advance</li>
   				 </ul>

   			<div class="search">
   				
   				<i class="bi bi-search"></i>
   				<input type="text" name="search" placeholder="Search Text...">
   			</div>


		<!-- user account -->


   			<div class="user">
   				 <button style="border: none;outline: none;background: transparent;"><img src="img/history.jpg"></button>
   			</div>

   			<!-- end user -->
   			</nav>
<!-- end navigation -->

 <!-- content -->
  		
  		 <div class="content" id="scroll_bar">
  		 	 <h1>Heading From the Content<//
  


  		  <div class="buttons">
  		  	 
  		  	  <button><a href="index.html" style="text-decoration: none;color: #fff;">Quiz Start</a></button>
  		  </div>

  		 </div>

      <!-- end content -->

  	 </div>
  	 <div class="master_play">
  	 	
  	 	 <div class="wave">
  	 	 	
  	 	 	<div class="wave1" id="speech"><i  class="bi bi-volume-up-fill"></i></div>
  	 	 	<div class="wave1"><i class="bi bi-translate" style="margin-left: 50px;"></i></div>

  	 	 </div>

  	 </div>

  </header>
  

</body>
  <script type="text/javascript">
  	
   $('#genre').on('change', function() {
        var genreid = this.value;
        // console.log(genre);
        $.ajax({
            url: 'ajax/content.php',
            type: "POST",
            data: {
                genreid: genreid
            },
            success: function(result) {
                $('#state').html(result);
                // console.log(result);
            }
        })
    });
  
  </script>
</html>