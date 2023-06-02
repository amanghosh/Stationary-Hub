<?php include('config/constants.php');?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Stationary Hub</title>
        <!---Linking the css file here-->
        <link rel="stylesheet" href="css/styke.css">
    </head>
    <body>
        <div class="header">
            <div class="container">
                <!--Nav bar section starts here-->
                    <div class="navbar">
                        <div class="logo">
                            <a href="<?php echo SITEURL; ?>"><img src="images/Logo.png" width="170px"></a>
                        </div>
                            <nav>
                                <ul>
                                    <li><a href="<?php echo SITEURL; ?>">Home</a></li>
                                    <li><a href="<?php echo SITEURL; ?>products.php">Products</a></li>
                                    <li><a href="">About</a></li>
                                    <li><a href="<?php echo SITEURL; ?>account.php">Account</a></li>
                                </ul>
                            </nav>
                            <a href="<?php echo SITEURL; ?>cart.php"><img src="images/cart.png" width="30px" height=""30px></a>
                        </div>
                        <!--Nav bar section ends here-->
                        
                