<?php include('config/constants.php');?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>All Products - Stationary</title>
        <!---Linking the css file here-->
        <link rel="stylesheet" href="css/styke.css">
    </head>
    <body>
            <div class="container">
                <!--Nav bar section starts here-->
                    <div class="navbar">
                        <div class="logo">
                            <a href="index.php"><img src="images/Logo.png" width="170px"></a>
                        </div>
                            <nav>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="products.php">Products</a></li>
                                    <li><a href="">About</a></li>
                                    <li><a href="account.php">Account</a></li>
                                </ul>
                            </nav>
                            <a href="cart.php"><img src="images/cart.png" width="30px" height=""30px></a>
                        </div>
                    </div>
                <!--Nav bar section ends here-->

            </div>
        

        <!---- single product details ---->
            <div class="small-container single-product">
                <div class="row">
                    <div class="col-2">
                        <img src="images/old diary.jpg" width="100%">
                    </div>
                    <div class="col-2">
                        <p>Home / Journal</p>
                        <h1>Classic Leather Finish Journal</h1>
                        <h4>₹249.99</h4>
                        <input type="number" value="1">
                        <a href="" class="btn">Add To Cart</a>

                        <h3>Product Details</h3>
                        <br>
                        <p>GENUINE DURABLE LEATHER:- Soft & Supple Designer Brown Top Grain Leather with a real leather scent. 
                            This journal is made of the finest aged leather, it's a special keeper of your dreams, designs & thoughts.</p>
                    </div>
                </div>
            </div>

            <div class="small-container">
                <div class="row row-2">
                    <h2>Related Products</h2>
                </div>
            </div>

            <div class="small-container">
                <div class="row">
                    <div class="col-4">
                        <img src="images/geometry box.jpg">
                        <h4>Classmate Asteroid Mathematical Drawing Box</h4>
                        <p>₹229.99</p>
                    </div>
                    <div class="col-4">
                        <img src="images/captain america bag.jpg">
                        <h4>Captain America Unisex Backpack </h4>
                        <p>₹749.99</p>
                    </div>
                    <div class="col-4">
                        <img src="images/old diary.jpg">
                        <h4>Classic Leather Finish Journal</h4>
                        <p>₹249.00</p>
                    </div>
                    <div class="col-4">
                        <img src="images/parker pen.jpg">
                        <h4>GeometryPremeium Parker pen gift set</h4>
                        <p>₹999.00</p>
                    </div>
                </div>
            </div>
        <!---- feature Products  ends here---->
        
        <!---- footer -->

            <div class="footer">
                <div class="container">
                    <hr>
                    <p class="copyright">Copyright 2022 - Aman Ghosh</p>
                </div>
            </div>
        <!---- footer -->
    </body>


    
</html>
