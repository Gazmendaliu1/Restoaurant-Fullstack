<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylecheckout.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylefooter.css">
   
</head>
<body>


    
<div class="container">
    <div class="checkoutLayout">

        
        <div  style="margin-left: 20%;" class="returnCart">
        <a href='orderonline.php' class='btn4 btn-light'>back to all menu</a><br>
            <h1 >List Order in Cart</h1>
            <div class="list rend">

                <div class="item">
                    <img src="images/1.webp">
                    <div class="info">
                        <div class="name">PRODUCT 1</div>
                        <div class="price">€ 22</div>
                    </div>
                    <div class="quantity">5</div>
                    <div class="returnPrice">€ 433.3</div>
                </div>

            </div>
        </div>


        <div    class="right">
            <h1>Checkout</h1>

            <div class="form">
                <div class="group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name">
                </div>
    
                <div class="group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone">
                </div>
                <div class="group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>
    
                <div class="group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address">
                </div>
    
                <div class="group">
                    <label for="country">Country</label>
                    <select name="country" id="country">
                        <option value="">Choose..</option>
                        <option value="">Austria</option>
                    </select>
                </div>
    
                <div class="group">
                    <label for="city">City</label>
                    <select name="city" id="city">
                        <option value="">Choose..</option>
                        <option value="">Wien</option>
                        <option value="">Graz</option>
                        <option value="">Linz</option>
                    </select>
                </div>
            </div>
            <div class="return">
                <div class="row">
                    <div>Total Quantity</div>
                    <div class="totalQuantity">70</div>
                </div>
                <div class="row">
                    <div>Total Price</div>
                    <div class="totalPrice">$900</div>
                </div>
            </div>
            <button class="buttonCheckout">CHECKOUT</button>
            </div>
    </div>
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


<script src="checkout.js"></script>



</body>
</html>