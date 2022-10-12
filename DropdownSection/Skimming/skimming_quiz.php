<html>
<head>
	<title>QUZI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>

*{
   padding: 0;
   margin:0;
}
html,body{
    background: #1b2631;
    font-family: georgia;
}

.container.row{
    height: 800px;
    width: 100%;
    
}
.row{
    height: 300px;
    margin-left: 100px;
}
#point{
    text-align: justify;
    /* margin-top: 30px; */
    font-size: 22px;
    color: black;
    font-family: georgia;
}
#question{
    color: black;
    font-size: 26px;
    text-align: justify;
    /* margin-top: 20px; */
    font-family:Georgia, 'Times New Roman', Times, serif;
}
body form{
    margin-top: -20px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    color: black;
    font-size: 22px;
    font-weight: bold;
    text-align:justify;

}
#input1{cursor: pointer;border: none;outline: none;}
#input1 input{margin-left: 20px;}
#input1 input:hover{background: #1b2631;}
#next{
    padding: 5px 30px;
    outline: none;
    color: white;
    border: none;
    background:#1b2631;
    transition: all 0.3s linear;

    margin-left: 20px;
    margin-top: 20px;
    cursor: pointer;
}
#next:hover{
    background-color: white;
    color: #1b2631;
    border:1px solid black;
    
}


    </style>
</head>

<div class="container">
    <div class="row">
         <div class="col-6 mt-5 ml-5 bg-light" style="padding-bottom:50px;border-radius:5px;">
<body onload= "createQuestion();">

	<div id="point"></div>

	<div id="question"></div><br>
	<form name="radioAnswers" id="input1" style="list-style:none">
		<li><input type="radio" name="choice" value="0">&nbsp;&nbsp;<label id="label0"></label></input></li>
		<li><input type="radio" name="choice" value="1">&nbsp;&nbsp;<label id="label1"></label></input></li>
		<li><input type="radio" name="choice" value="2">&nbsp;&nbsp;<label id="label2"></label></input></li>
		<li><input type="radio" name="choice" value="3">&nbsp;&nbsp;<label id="label3"></label></input></li>
	</form>
	<input type="button" value="next" id="next" onclick="nextQuestion()" style="margin-top:10px;"></input>
    </div>
</div>
</div>
</body>
<script>
    var allQuestions = [{question: "Q1: What is this text about?",
                    choices: ["Dwarf planet", "exoplanet discovery", "planets", "stars"],
                    correctAnswer:1},
                    {question: "Q2: How far is the exoplanet?",
                    choices: ["12 light years", "11 light years", "10 light years", "9 light years"],
                    correctAnswer:1}];
var score=0;
var currentNumber = 0;
function createQuestion(){
    for (var i=0; i < allQuestions[this.currentNumber].choices.length;i++){
        document.forms.radioAnswers.elements.choice[i].checked = false;
    }
    var question=document.getElementById("question");
    question.innerHTML = allQuestions[this.currentNumber].question;
    var point  = document.getElementById("point");
    point.innerHTML="<span>score: "+score+"</span>";
    createChoices();
}
function createChoices(){
    for (var i = 0; i < allQuestions[this.currentNumber].choices.length; i++){
        var option=document.getElementById("label"+i);
            option.innerHTML=allQuestions[this.currentNumber].choices[i];
    }
}
function nextQuestion(){
    for (var i =0; i < allQuestions[this.currentNumber].choices.length; i++){
        if (document.forms.radioAnswers.elements.choice[i].checked == true){
            var userAnswer = document.forms.radioAnswers.elements.choice[i].value;
            if (userAnswer == allQuestions[this.currentNumber].correctAnswer){
            this.score++;
            }
        }
    }
    this.currentNumber++;
    if (this.currentNumber==allQuestions.length){ 
        showScore();       
    }
    else{
        createQuestion();
    }
}
function showScore(){
    document.forms.radioAnswers.style.display="none";
    var question=document.getElementById("question");
    question.style.display = "none";
    var elt=document.getElementById("point");
    elt.style.display = "block"; 
    var button = document.getElementById("next");
    button.style.display="none";   

}


</script>
</html> 