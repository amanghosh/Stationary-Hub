<?php include('partials-front/menu.php'); ?>

<div class="row">
                            <div class="col-2">
                                <h1>Get The Best Stationary Products For You And Your Loved Ones</h1>
                                <p>
                                    Procrastination is the bad habit of putting of until the day after 
                                    tomorrow<br> what should have been done the day before yesterday.<br> -Napoleon Hill
                                </p>
                                <a href="products.php" class="btn">Explore Now &#8594</a>
                            </div>
                            <div class="col-2">
                                <img src="images/bag.png">
                            </div>
                        </div>
                    </div>


            </div>
        </div>
        <!---- categories  starts here---->
            <div class="categories">
                <div class="small-container">
                    <h2 class="title">Categories</h2>
                    
                    <!-----<?php
                        //Create SQL Query to Display CAtegories from Database
                        $sql = "SELECT * FROM category WHERE featured='Yes' LIMIT 3";
                        //Execute the Query
                        $res = mysqli_query($conn, $sql);
                        //Count rows to check whether the category is available or not
                        $count = mysqli_num_rows($res);
                        if($count>0)
                {
                    //Categories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like cat_id, cat_name, image_name
                        $cat_id = $row['cat_id'];
                        $cat_name = $row['cat_name'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>product details.php?category_id=<?php echo $cat_id; ?>">
                            <div class="row">
                            <div class="col-3">
                                <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>">
                                        <?php
                                    }
                                ?>
                            

                                <h4><?php echo $cat_name; ?></h3>
                            </div>
                            </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>


            <div class="clearfix"></div>
                    ?>
                    ---->
                    <div class="row">
                        <div class="col-3">
                            <img src="images/copy cat.jpg">
                        </div>
                        <div class="col-3">
                            <img src="images/bag cat.jpg">
                        </div>
                        <div class="col-3">
                            <img src="images/paper cat.jpg">
                        </div>
                    </div>

                </div>
                
            </div>
        <!---- feature categories  ends here---->

        <!---- feature Products  starts here---->
            <div class="small-container">
                <h2 class="title">Featured Products</h2>
                <div class="row">
                <div class="col-4">
                        <a  href="product details.php"><img src="images/geometry box.jpg"></a>
                        <h4>Classmate Asteroid Mathematical Drawing Box</h4>
                        <p>₹229.99</p>
                    </div>
                    <div class="col-4">
                    <a  href="product details2.php"><img src="images/captain america bag.jpg"></a>
                        <h4>Captain America Unisex Backpack </h4>
                        <p>₹749.99</p>
                    </div>
                    <div class="col-4">
                    <a  href="product details3.php"><img src="images/old diary.jpg"></a>
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
        <!---- offer starting -->

        <div class="offer">
            <div class="small-container">
                    <div class="row">
                        <div class="col-2">
                            <img src="images/offer.png" class="offer-img">
                        </div>
                        <div class="col-2">
                            <p>Exclusively launching on 30th June -12 PM</p>
                            <h1>G47 Special Edition</h1>
                            <small>Head into the office, then into the gym, and 
                            finally into the weekend without missing a beat.</small>
                        </div>
                    </div>
            </div>
        </div>

        <!---- offer ending -->
        <!---- brands starting -->
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="images/itc.png">
                    </div>
                    <div class="col-5">
                        <img src="images/parker logo.png">
                    </div>
                    <div class="col-5">
                        <img src="images/camlin logo.png">
                    </div>
                    <div class="col-5">
                        <img src="images/amt logo.png">
                    </div>
                    <div class="col-5">
                        <img src="images/pilot logo.png">
                    </div>
                </div>
                </div>
        </div>
        <!---- brands ending -->
        
<?php include('partials-front/footer.php'); ?>