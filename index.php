<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylefooter.css">
    <link rel="stylesheet" href="stylecart.css">

    
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


      <!-- Main MID --> 




    <div   class="part1 " >
               
    <div class="container c1">
        
        <div class="d1">
            <h4>Made Fresh to order</h4>
        </div>

        <div  class="d2">
            <p style="opacity: 1;">Indulge in a gastronomic adventure where each dish tells a story, and every bite 
                is a celebration of exquisite taste and creativity.</p>
        </div>

        <div  class="d3 row row-col-lg-4 row-col-md-3 row-col-sm-2 row-col-xs-1">
           <button class="btn3"  style="box-shadow: 5px 5px 15px 5px;"> <a style="text-decoration: none;color:black; " href="viewmenu.php">view menu</a></button>
            <button class="btn3" style="box-shadow: 5px 5px 15px 5px;"><a  style="text-decoration: none;color:black; " href="orderonline.php">order online</a> </button>
            <button class="btn3" style="box-shadow: 5px 5px 15px 5px;"><a  style="text-decoration: none;color:black; " href="booking.php">booking</a></button>
        </div>

        <div class="d4 row row-col-lg-4 row-col-md-3 row-col-sm-2 row-col-xs-1" style="padding-bottom: 50px;">
            
            <a class="div4s" href="pizza.php">
                <div  style="box-shadow: 5px 5px 15px 5px black;">
                    <img src="icon/pizza.png" alt="">
                    <p>pizza</p>
                </div>
            </a>
            <a class="div4s" href="pasta.php">
                <div style="box-shadow: 5px 5px 15px 5px black;">
                    <img src="icon/pasta.png" alt="">
                    <p>pasta</p>
                </div>  
            </a>
            <a class="div4s" href="burger.php">
                <div style="box-shadow: 5px 5px 15px 5px black;">
                    <img src="icon/burger.png" alt="">
                    <p>burger</p>
                </div>  
            </a>
            <a class="div4s" href="appetizer.php">
                <div style="box-shadow: 5px 5px 15px 5px black;">
                    <img id="div4s-4" src="icon/apetizer.png" alt="">
                    <p>appetizer</p>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- PART 2  ... MID ... --><!-- PART 2  ... MID ... --><!-- PART 2  ... MID ... -->
<div   class=" part2   row row-col-lg-4 row-col-md-3 row-col-sm-2 row-col-xs-1">
    <div class="left">
        <h2>About</h2>
        <p>Italy's Pizza & Pasta Company serves calzones, pasta, pizzas, salads, strombolis, and more to the Buford, GA area.</p>
        <h2>Year Established</h2>
        <p>2010</p>
        <h2>Product</h2>

        <ul>
            <li>Apetizer</li>
            <li>Calzones</li>
            <li>Pizza</li>
            <li>Pasta</li>
            <li>Salads</li>
            <li>Stromboli</li>
            <li>Subs</li>
        </ul>
    </div>
    <div class="right">
        <h2>Service</h2>
        <ul>
            <li>Dine-in</li>
            <li>Catering</li>
            <li>Delivery - online orders</li>
        </ul>
        <h2>Specialities</h2>
        <ul>
            <li>Pizza</li>
            <li>Pasta</li>
            <li>Burgers</li>
        </ul>
        <h2>Business Hours</h2>
        <p>Mon - Thu       11:00 am - 9:00 pm</p>
        <p>Fri, Sat             11:00 am - 10:00 pm</p>
        <p>Sun                  12:00 pm - 9:00 pm</p>
    </div>

</div>

<!-- PART 3  ... FOOTER ... --><!-- PART 3  ... FOOTER ... --><!-- PART 3  ... FOOTER ... -->

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
        <h2>
            CART
        </h2>

        <div class="listCart">


            <div class="item">
                <img src="images/1.jpeg">
                <div class="content">
                    <div class="name">Pizza</div>
                    <div class="price">$12 / 1 product</div>
                </div>
                <div class="quantity">
                    <button>-</button>
                    <span class="value">3</span>
                    <button>+</button>
                </div>
            </div>


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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>