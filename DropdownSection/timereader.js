txt = document.getElementById('content').innerText;


// var count =0; 
// var time;
// function start(){
   
    

//     document.getElementById('time').innerHTML = count;
//     count++;
     

   
//     time = setTimeout('start()',1000);

// }
// function stop(){

//     clearTimeout(time);
// }

i=0
time =0
count =0;
function start(){
    myArray = txt.split(" ");
    myArrayl = txt.split(" ").length;
   
   

  // style element

    if(myArrayl!=count){

    document.getElementById("content").innerHTML = myArray[i];
    document.getElementById("content").style.textAlign = "center";
    document.getElementById("content").style.fontSize = "80px";
    document.getElementById("content").style.lineHeight = "300px";
// end style element
     time= setTimeout('start()',3000);
     count++;
     i++;
    }
}


// frist speed 

function speed1(){
 myArray = txt.split(" ");
 myArrayl = txt.split(" ").length;
    count++;
    i++;

    if(myArrayl!=count+1){

  // style element

    document.getElementById("content").innerHTML = myArray[i];
    document.getElementById("content").style.textAlign = "center";
    document.getElementById("content").style.fontSize = "70px";
    document.getElementById("content").style.lineHeight = "300px";
// end style element

     time= setTimeout('speed1()',1000);
}
}


// second speed


function speed2(){
 myArray = txt.split(" ");
 myArrayl = txt.split(" ").length;
    count++;
    i++;



  // style element
  if(myArrayl!=count+1){
    document.getElementById("content").innerHTML = myArray[i];
    document.getElementById("content").style.textAlign = "center";
    document.getElementById("content").style.fontSize = "80px";
    document.getElementById("content").style.lineHeight = "300px";
// end style element

     time= setTimeout('speed2()',500);
}
}

function stop(){

    clearTimeout(time);
}
