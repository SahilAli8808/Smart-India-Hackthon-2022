<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   body {
  font-family: 'lato', sans-serif;
}
.container-table {
height: 400px;
width: 33%;
margin-top: -25px;
  /* margin-left: auto;
  margin-right: auto; */
  padding-left: 10px;
  padding-right: 10px;
}
h3 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
}
h2 small {
  font-size: 0.5em;
}
.responsive-table li {
  border-radius: 3px;
  padding: 25px 30px;
  display: flex;
  justify-content: space-between; */
   margin-bottom: 25px;
} 
.responsive-table .table-header {
  background-color: #1B2631;
  font-size: 14px;
  color: white;
  /* text-transform: uppercase; */
  /* letter-spacing: 0.03em; */
}
.responsive-table .table-row {
  background-color: #ffffff;
  box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
}
.responsive-table .col-1 {
  flex-basis: 10%;
}
.responsive-table .col-2 {
  flex-basis: 30%;
}
.responsive-table .col-3 {
  flex-basis: 25%;
} 
 .responsive-table .col-11 {
  flex-basis: 10%;
  color:white;
}
.responsive-table .col-22 {
  flex-basis: 40%;
  color: white;
 
}
.responsive-table .col-33 {
  flex-basis: 25%;
  color: white;
  
}



</style>
</head>
<body>
<div class="container-table">
  <h3>Our Top Speed Readers</h3>   <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-11">Rank </div>
      <div class="col col-22">User Name</div>
      <div class="col col-33">Speed (w/m)</div>
      
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">1</div>
      <div class="col col-2" data-label="Customer Name">Sahil</div>
      <div class="col col-3" data-label="Amount">500</div>
      
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">2</div>
      <div class="col col-2" data-label="Customer Name">Owais</div>
      <div class="col col-3" data-label="Amount">400</div>
     
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">3</div>
      <div class="col col-2" data-label="Customer Name">Kumail</div>
      <div class="col col-3" data-label="Amount">300</div>
   
    </li>
   
  </ul>
</div>
    
</body>
</html>
