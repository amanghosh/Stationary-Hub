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
                            <a href="cart.html"><img src="images/cart.png" width="30px" height=""30px></a>
                        </div>
                    </div>
                <!--Nav bar section ends here-->
            </div>
        
            <!-----cart item details-->

            <div class="small-container" cart-page>

                <table>
                    <tr>
                        <th>Products</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="images/geometry box.jpg">
                                <div>
                                    <p>Classmate Asteroid Mathematical Drawing Box</p>
                                    <small>Price: ₹229.00</small>
                                    <a href="">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>₹229.00</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="images/captain america bag.jpg">
                                <div>
                                    <p>Captian America Unisex Backpack</p>
                                    <small>Price: ₹749.00</small>
                                    <a href="">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>₹749.00</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="images/old diary.jpg">
                                <div>
                                    <p>Classic Leather Finish Journal</p>
                                    <small>Price: ₹249.00</small>
                                    <a href="">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>₹249.00</td>
                    </tr>
                </table>
                <div class="total-price">
                    <table>
                        <tr>
                            <td>Subtotal</td>
                            <td>₹1227.00</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td>₹00.00</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>₹1227.00</td>
                        </tr>
                    </table>
                </div>



            </div>
        
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
