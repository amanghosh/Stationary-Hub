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
                            <a href="<?php echo SITEURL; ?>"><img src="images/Logo.png" width="170px"></a>
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
        
            <!-------account page-->

            <div class="account-page">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="images/bag.png" width="100%">
                        </div>
                        <div class="col-2">
                            <div class="form-container">
                                <div class="form-btn">
                                    <span onclick="login()">Login</span>
                                    <span onclick="register()">Register</span>
                                    <hr id="Indicator">
                                </div>
                                <form id="LoginForm">
                                    <input type="text", placeholder="Username">
                                    <input type="password", placeholder="Password">
                                    <button type="submit" class="btn">Login</button>
                                </form>

                                <form id="RegForm">
                                    <input type="text", placeholder="Username">
                                    <input type="email", placeholder="Email">
                                    <input type="password", placeholder="Password">
                                    <button type="submit" class="btn">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
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




        <!---js for toggle Form---->

        <script>

            var LoginForm = document.getElementById("LoginForm");
            var RegForm = document.getElementById("RegForm");
            var Indicator = document.getElementById("Indicator");

            function register(){
                RegForm.style.transform = "translate(0px)";
                LoginForm.style.transform = "translate(0px)";
                Indicator.style.transform = "translate(100px)";
            }

            function login(){
                RegForm.style.transform = "translate(300px)";
                LoginForm.style.transform = "translate(300px)";
                Indicator.style.transform = "translate(0px)";
            }

        </script>
    </body>   
</html>
