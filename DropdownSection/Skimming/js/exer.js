
count =15 ;
time=0;

function timerfun(){

      if(count!=0){
      document.getElementById('img').style.display="block";
      document.getElementById('btn').innerHTML = "";
      
      count--;
      document.getElementById('time').innerHTML = count;
      // document.getElementById('time').style.color="white";
      

      setTimeout('timerfun()',1000)
      }else{
        // document.getElementById('btn').innerHTML = "Question: What was the article talking about ?";
        document.getElementById('img').style.display="none";
        document.getElementById('ques').style.display = "block";
        
      }
}