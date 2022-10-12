<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <!-- <link rel="stylesheet" href="C:\xampp\htdocs\SIH\CSS\style2.css" type="text/css" media="all" /> -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
   
</head>

<body>
    

<header class="wrapper">

    <input type="checkbox" id="show_search">
    <h1 class="logo"><a href="index.php"> <img src="images/logo.png"  alt="img" width="300px" height="300px"> </a> </h1>
    <h1 class="logo_2"></h1>


   
    <div class="login_btn" >
        <!-- <a class="cta" href="./loginreg/login.php"><button class="btn_sign btn_2">Login</button></a> -->
    </div>
    <div class="login_btn" >
        <!-- <a class="cta" href="./loginreg/signup.php"><button class="btn_sign">Sign UP</button></a> -->
    </div>


</header>




<!-- ========================================================================= -->

<div class="main_dropdown_container">
   
  
    <div class="dropdown_logo_bar_li" onclick="toggle_bar()" id="toggle_bar" ><i class="fas fa-bars dropdown_logo_bar bar " ></i></div>

    <nav class="navbar_container toggle">
            <div class="main_navbar">
               
                <ul class="main_navbar_ul">
                
                    <li class="navbar_level_1_li"><a href="index.php" class="navbar_level_1_link">Home</a></li>
                    <li class="navbar_level_1_li"><a href="about.php" class="navbar_level_1_link">About</a></li>
                    <li class="navbar_level_1_li"><a href="site-map.php" class="navbar_level_1_link">Sitemap</a></li>
                    <li class="navbar_level_1_li ">
                        <a href="" class="navbar_level_1_link">Practice</a>
                    
                            <ul class="dropdown_level_1">

                                    <li class="navbar_level_2_li"><a href="instruction.php" class="navbar_level_2_link">Instruction</a></li>
                       
                                    <li class="navbar_level_2_li"><a href="./DropdownSection/index.php" class="navbar_level_2_link">Excercise</a></li>
                                    <li class="navbar_level_2_li"><a href="./ProfilePage/profile.html" class="navbar_level_2_link">Result</a></li>



                            </ul>

                    
                    </li>
                    <li class="navbar_level_1_li"><a href="leisure.php" class="navbar_level_1_link">Explore</a></li>
                    

                            
                    <li class="navbar_level_1_li"><a href="contactus.php" class="navbar_level_1_link">Contact</a></li>
                    
                   <li class="translater logo-wrap" > 
                   <svg id="svgimg" xmlns="http://www.w3.org/2000/svg" class="show-inline tlogo mr-sm-2" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
  <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
  <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
</svg>  

<style type="text/css">
 
 /*google translate Dropdown */
 
 #google_translate_element select{
 background:#f5f0f8;
 color:#000000;
 border: none;
 border-radius:3px;
 padding:6px 8px
 }
 
 /*google translate link | logo */
   .goog-logo-link{
   display:none!important;
   }
 .goog-te-gadget{
 color:transparent!important;
 }
 
 /* google translate banner-frame */
 
 .goog-te-banner-frame{
 display:none !important;
 }
 
 #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
.goog-text-highlight { background: none !important; box-shadow: none !important;}
 
 body{top:0!important;}
   </style>
 
 <div id='google_translate_element' ></div>
 <script>
 function googleTranslateElementInit() {
 new google.translate.TranslateElement({
 pageLanguage: 'en',
 autoDisplay: 'true',
 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
 }, 'google_translate_element');
 }
 </script>
 <script src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script></li>

</ul>
           
<!-- <div class="translatericon">
                   
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
 <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
 <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
</svg> 
</div> -->
                



            </div>
    </nav>
</div>

<script>

        let toggle = document.getElementsByClassName('toggle_bar');

        function toggle_bar() {

         let element = document.querySelector(".toggle");
         element.classList.toggle("show")
         
         let element2 = document.querySelector(".bar")
         element2.classList.toggle("bar2")
        
         
          
            
            
        }

</script>


<!-- ========================================================================= -->





</body>
</html>
