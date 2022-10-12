function ContentClick(){
  
          const nodeVal = document.getElementsByTagName('h5').innerText;
          // alert("welcome")
	 	  var req = new XMLHttpRequest();
	 	  req.open("GET","http://localhost/SIH/reading/content.php?datavalue="+nodeVal,true);
	 	  req.send();
         


         req.onreadystatechange=function(){
             if (req.readyState==4 && req.status==200) {
         
             // document.getElementById('content').innerHTML=req.responseText;
    
                 

             }
            
         }


      }
      
   