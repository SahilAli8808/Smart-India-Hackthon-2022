<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" type="text/css" href="spreederStyle.css"> -->
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js">
        
    </script>
</head>

<body>
    <main class="container">
        <div id="startPara"  style="display:none;">
            <p class="bg-dark">Your Reading has been started</p>
        </div>

        <div class="read">
        <button id="start" onclick="start()">Start</button>
        <span>Time:<span id="t1"></span></span>

        <div class="wrapper">
            <div id="content" class="content">
                Pat and his friends were playing baseball. When his friend hit the ball he ran after it but he couldn’t
                catch it. When he was going to pick the ball up, he heard the sound of a small bird. He found a little blue
                bird next to his baseball. He called his friends and showed them the bird. The bird had a broken wing so it
                couldn’t fly. Pat decided to take it home, the kids stopped playing baseball and went home. Pat is a bird
                lover. After returning home, he showed the blue bird to his mother. Pat told his mother about what had
                happened and asked if he could keep the bird.
            </div>
            <div class="result1" id="result1">
                <p>Your Reading Speeed was:<span id="time"></span></p>
                <p>Now let's test your comprehension!</p>
                <button id="next">Next</button>
            </div>
        </div>
          
        <button id="stop" onclick="show()" >Stop</button>
        </div>


        <div class="test">
            <div class="mcq-form">
                <div id="d0" style="display:block;">
                    <h1>Instructions</h1>
                    <ol>
                        <li>Total 5 Question</li>
                        <li>you have to attempt all Questions</li>
                    </ol>
                    
                </div>
                <div id="d1">
                <span>Q1: Pat and his friends were playing baseball.</span><br>
                    <ol>
                        <li><input value="true"     type="radio" name="q1">True</li>
                        <li><input value="false"    type="radio" name="q1">False</li>
                    </ol>
                </div>
                
                <div id="d2">
                <span>Q2: The bird had a broken leg so it couldn’t walk.
                </span>-<br>
                    <ol>
                        <li><input value="true"     type="radio" name="q2">True</li>
                        <li><input value="false"    type="radio" name="q2">False</li>
                    </ol>
                    
                </div>
                
                <div id="d3	">
                <span>Q3: After  returning home, he showed the blue bird to his.</span>-<br>
                    <ol>
                        <li><input value="true"     type="radio" name="q3">True</li>
                        <li><input value="false"    type="radio" name="q3">False</li>
                    </ol>
                
                </div>
            
                <div id="d4">
                <span>Q4: He  called his friends and showed them the bird.</span>-<br>
                    <ol>
                        <li><input value="true"     type="radio" name="q4">True</li>
                        <li><input value="false"    type="radio" name="q4">False</li>
                    </ol>
                    
                </div>
                <button id="finish">Finish</button>
            </div> 
            <div class="result2" id="result2">
                <p>Your Reading Speeed was:<span id="read-speed">0</span></p>
                <p>Your comprehension was:<span id="compr"></span></p>
                <button id="nextExercise"><a href="Spreeder.html">Next</a></button>
            </div>
        </div>
    </div>
    </main>
<div id="spreeder">
    
</div>
      
    
</body>
<script>
    count=0;
    time=0;
    var arr_length=0;
    function start(){
         count++;
         document.getElementById('t1').innerHTML = count;
 
         time = setTimeout('start()',1000);
 
         let txt  = String(document.getElementById('content').innerHTML);
         arr_length = txt.split(" ").length;
         // //alert( arr_length+"arrlength");
   
    }
   function  stop(){
 
     clearTimeout(time);
     //alert(time+"time");
     return time;
   }
 
 //   reading work
  //readTime = 0;
  var wpm = 2;
  var speed_read;
     function show(){
         let wpm = 1;
         const readTime = stop();
         //alert("hello1"+readTime);
         //alert("hello2"+readTime);
         wpm = arr_length/(readTime/60);
         //alert("hello");
         //alert(wpm+"wpm");
         speed_read = Math.round(wpm);
        //  alert(speed_read);
         document.getElementById("time").innerHTML = speed_read+" wpm";
     }
     function show2(){
         document.getElementById("read-speed").innerHTML = speed_read+" wpm";
     }
 
 </script>
</html>