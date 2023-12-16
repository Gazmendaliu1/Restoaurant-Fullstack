<?php 
    if(isset($_POST["submit"])){
        $email = $_POST["email"] ?? "test@mail.com";
        $msg = $_POST["message"] ?? "No value";
        $phone = $_POST["phone"] ?? "No phone";
        $date = $_POST["date"] ?? "No date";
        $reservation = $_POST["reservation"] ?? "No reservation";
        $name = $_POST["name"] ?? "No name";

        $subject = "Reservation Details From Restaurant Website";
        $msg = "Name: $name\n";
        $msg .= "Email: $email\n";
        $msg .= "Phone: $phone\n";
        $msg .= "Date: $date\n";
        $msg .= "Number of Reservation: $reservation\n";
        $msg .= "Message: $msg";

        mail("gazmend.aa@gmail.com", $subject, $msg, "From: $email");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="style-options.css">
    <link rel="stylesheet" href="stylecart.css">
    <link rel="stylesheet" href="stylefooter.css">
    <link rel="stylesheet" href="booking.css">

</head>
<body>

<!--  Navbar Start-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div style="margin-left: 20%; " class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img style="width: 80px;" src="logo.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div style="margin-left: 20px; font-size:30px; font-weight:bold" class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li style="margin-left: 20px;" class="nav-item">
                <a class="nav-link active" aria-current="page" href="checkout.php">Checkout</a>
              </li>
            </ul>

            <form class="d-flex" role="search">
                <div  class="iconCart">
                
                <div class="container">
        <header>
           
            <div class="iconCart">
                <img src="icon.png">
                <div class="totalQuantity">0</div>
            </div>
        </header>

        <div class="listProduct">

         

        </div>
    </div>
                </div>
            </form>
          </div>
        </div>
      </nav>
  

  <!--  MID content Start-->

  <div id="form-container">
    <form method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" required>

        <label for="date">Date:</label>
        <input type="date" name="date" required>

        <label for="reservation">Number of Reservations:</label>
        <select name="reservation" required>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <label for="message">Message:</label>
        <textarea name="message" cols="30" rows="10" required></textarea>

        <input type="submit" value="Send" name="submit">
    </form>
</div>


    <!--  ... FOOTER ... --><!--  ... FOOTER ... --><!-- ... FOOTER ... -->

<div class="part3 row row-col-lg-4 row-col-md-3 row-col-sm-2 row-col-xs-1">
    <div>
        <h3>FIND US</h3>
        <p>Hauptstrasse</p>
        <p>Wien</p>
        <p>1010</p>
    </div>
    <div>
        <h3>HOURS</h3>
        <h4>Monday</h4>
        <p>9:00 - 22:00</p>
        <h4>Sunday</h4>
        <p>10:00 - 21:00</p>
    </div>
    <div>
        <h3>CALL US</h3>
       <p ><a href="" id="mobilenumber" >  +43 01 222 333</a></p>
       <p><a href=""  id="mobilenumber">+43 01 444 555</a></p>
    </div>
</div>

<div class=" end">
    <marquee behavior="" direction=""> Gazmend Aliu</marquee>
</div>
  


    <!-- CART -->
    

    <div class="cart">
    <h2>CART</h2>

    <div class="listCart">
        
       
    </div>

    <div class="buttons">
        <div class="close">
            CLOSE
        </div>
        
        <div class="checkout">
            <a href="checkout.php">CHECKOUT</a>
        </div>
    </div>
</div>



    <script src="app.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
 crossorigin="anonymous"></script>
</body>
</html>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
 crossorigin="anonymous"></script>
</body>
</html>