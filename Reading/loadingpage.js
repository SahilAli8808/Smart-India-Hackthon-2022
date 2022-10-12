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




