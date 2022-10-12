<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</head>

<body>


    <section>
        <?php include 'nav_bar.php'; ?>
    </section>

    <!-- header -->



    <!-- Start content -->

    <section class="contact-section">
        <h2 style="color:#0189d2;" align="center" class="heading-contact">Contact Us</h2>
        <hr>


        <form class="contact-form" action="">
            <h3> Get in touch </h3>
            <hr>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="Name" class="form-control" id="inputName4" placeholder="Enter Your Name..." required/>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Email</label>
                    <input type="Email" class="form-control" id="inputEmail4" placeholder="name@example.com" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="inputaddress4">Address</label>
                <input type="address" class="form-control" id="inputaddress" placeholder="Your Address" required>


            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Purpose</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>To Contact Admin</option>
                    <option>Have a content related queries</option>
                    <option>Others</option>

                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
        <div class="contact-info">
            <h4> Contact Info:</h4>
            <p>If you have any questions or need help, please fill out the form below.
            <p> We do our best to respond within 1 business day.</p>
            </P>
            <p><b>Email:</b> codersenfuego@gmail.com</p>
            <p><b>Address Office</b></p>
            <p>khwaja Moinnuddin chishti language university, lucknow, uttar pradesh (View map)</p>
            <div class="gmap">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.198892531491!2d80.89393731457193!3d26.928908483120583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399956564d730943%3A0xa3f27afc8ce7218b!2sKhwaja%20Moinuddin%20Chishti%20Language%20University!5e0!3m2!1sen!2sin!4v1660985295939!5m2!1sen!2sin"
                    width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </section>
    <!-- end content -->





    <!-- footer -->

    <section>
        <?php include 'footer/footer.php'; ?>

    </section>
</body>

</html>