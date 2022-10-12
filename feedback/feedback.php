<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="feedback.js"></script>

    <title>Feedback</title>
</head>

<body>
<section>
<?php include 'nav_bar.php';?>
</section>


    <section class="sctn">
        <form action="thanks.php" method="post">
            <div class="heading">
                <h2>Feedback</h2>
                <hr>
            </div>

            <div class="text-field">
                <label>Your Feedback</label>
                <textarea rows="4" cols="25" placeholder="your feedback here " name="content"></textarea>

            </div>
            <section>
                <div class="text-field1">
                    <label>Rate Us</label>

                    <div class="rating">
                        <span class="rating__result"></span>
                        <i class="rating__star far fa-star"> <img
                                    onclick="document.getElementById('myImage').src='./img/staron.png'" id="myImage"
                                    src="./img/star.png" style="width:30px"></i>
                        <i class="rating__star far fa-star"> <img
                                    onclick="document.getElementById('myImage1','myImage').src='./img/staron.png'" id="myImage1"
                                    src="./img/star.png" style="width:30px"></i>
                        <i class="rating__star far fa-star"> <img
                                        onclick="document.getElementById('myImage2').src='./img/staron.png'" id="myImage2"
                                        src="./img/star.png" style="width:30px"></i>
                        <i class="rating__star far fa-star"> <img
                                            onclick="document.getElementById('myImage3').src='./img/staron.png'" id="myImage3"
                                            src="./img/star.png" style="width:30px"></i>
                        <i class="rating__star far fa-star"> <img
                                                onclick="document.getElementById('myImage4').src='./img/staron.png'" id="myImage4"
                                                src="./img/star.png" style="width:30px"></i>
                    </div>
                </div>
            </section>

            <div class="sub-btn">
                <input type="submit" class="sub-btn">
            </div>
        </form>
    </section>
</body>

</html>