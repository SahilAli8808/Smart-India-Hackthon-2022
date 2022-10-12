<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reading Skill</title>

	 <link rel="stylesheet" type="text/css" href="css/style.css">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	   

</head>
<body>


  <header>
  	 
  	 <div class="menu_side">
  	 	  <h1 class="active" style="color:#36e2ec;"><span ></span><i class="bi bi-book"></i><label id="listGenre">Introduction</label></h1>


  	 	  <div class="playlist" id="scroll_bar" onclick="funPlayList()">

  	 	  
  	 	  	
  	 	  	<h4 class="active"></h4>
  	 	  	 <?php require 'items.php' ?>
  	 	  	 <!-- <h4><span ></span><i class="bi bi-book"></i>Sci-Fiction</h4>
  	 	  	 <h4><span ></span><i class="bi bi-book"></i>Motivational</h4>
  	 	  	 <h4><span ></span><i class="bi bi-book"></i>Motivational</h4>
  	 	  	 <h4><span ></span><i class="bi bi-book"></i>Motivational</h4>
   	 	  	 <h4><span ></span><i class="bi bi-book"></i>Motivational</h4> -->
  	 	  </div>

  	 	 
  	 	  <!-- book collection -->
  	 	  
<div class="menu_song" id="scroll_bar">
 <!-- <h3 align="center">Reading List</h3> -->
	<!-- <div id="bookItem"> -->
		
	<!-- </div> -->

  	 	  	  <!-- <li class="bookItem"> -->


  	 	  	  	<!-- <span>01</span>
  	 	  	  	<img src="img/history.jpg" alt="Alan" >
  	 	  	  	<h5>
  	 	  	  		 
  	 	  	  		  History of Modern India <br>
  	 	  	  		  <div class="subtitle">Vipin Chandra</div>
  	 	  	  		  <i class="bi ReadListRead bi-book-half" id="1"></i>
  	 	  	  	</h5>
 -->

  	 	  	  <!-- </li> -->


<!--   	 	  	  <li class="bookItem">
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


 -->
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
  		 	 <div id="content"> 

  		     <!-- <?php include 'content.php' ?> -->

  		   </div>
  		 	 <!-- <h1>Heading From the Content</h1>

  		 	 <p>Looking to quickly add Bootstrap to your project? Use jsDelivr, provided for free by the folks at jsDelivr. <br> Using a package manager or need to download the source files? Head to the downloads page.</p>

  		 	 <p>Looking to quickly add Bootstrap to your project? Use jsDelivr, provided for free by the folks at jsDelivr. <br> Using a package manager or need to download the source files? Head to the downloads page.</p>

  		 	 <p>Looking to quickly add Bootstrap to your project? Use jsDelivr, provided for free by the folks at jsDelivr. <br> Using a package manager or need to download the source files? Head to the downloads page.</p>

  		 	 <p>Looking to quickly add Bootstrap to your project? Use jsDelivr, provided for free by the folks at jsDelivr. <br> Using a package manager or need to download the source files? Head to the downloads page.</p>

  		 	 <p>Looking to quickly add Bootstrap to your project? Use jsDelivr, provided for free by the folks at jsDelivr. <br> Using a package manager or need to download the source files? Head to the downloads page.</p>

  		 	 <p>Looking to quickly add Bootstrap to your project? Use jsDelivr, provided for free by the folks at jsDelivr. <br> Using a package manager or need to download the source files? Head to the downloads page.</p>

  		 	 <p>Looking to quickly add Bootstrap to your project? Use jsDelivr, provided for free by the folks at jsDelivr. <br> Using a package manager or need to download the source files? Head to the downloads page.</p>

  		 	 <p>Looking to quickly add Bootstrap to your project? Use jsDelivr, provided for free by the folks at jsDelivr. <br> Using a package manager or need to download the source files? Head to the downloads page.</p>

  		 	 <p>Looking to quickly add Bootstrap to your project? Use jsDelivr, provided for free by the folks at jsDelivr. <br> Using a package manager or need to download the source files? Head to the downloads page.</p>

  		 	 <p>Looking to quickly add Bootstrap to your project? Use jsDelivr, provided for free by the folks at jsDelivr. <br> Using a package manager or need to download the source files? Head to the downloads page.</p>

  		 	 <p>Looking to quickly add Bootstrap to your project? Use jsDelivr, provided for free by the folks at jsDelivr. <br> Using a package manager or need to download the source files? Head to the downloads page.</p>

 -->
 	<!-- </div> -->
  


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

  <script type="text/javascript">
  	
  	 function funPlayList(){
       
       // const  txt =document.getElementById('listGenre').innerText;
       if(getSelection('h4').focusNode){
           let nodeVal=getSelection('h4').anchorNode.data;
        console.log(getSelection('h4'));
        document.getElementById('listGenre').innerHTML = nodeVal;
        // document.getElementById('listGenre').style.color =white;

        var req = new XMLHttpRequest();
         req.open("GET","http://localhost/SIH/reading/content.php?datavalue="+nodeVal,true);
         // alert(data);
         


         req.send();

         req.onreadystatechange=function(){
             if (req.readyState==4 && req.status==200) {
                // const data = document.getElementById('bookItem');
                // const txt = data.children;
    
    
   
     //             const bookItemsList = document.getElementById("bookItem");
     //            const bIlist = bookItemsList.children;
     //            console.log(bIlist)
            
             document.getElementById('content').innerHTML=req.responseText;
    
                 

             }
            
         }


      }
      
}





  </script>
</body>
</html>