<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage product</h1>

        <br/><br/><br/>

                <!----Buttom to Add Admin---->
                <a href="<?php echo SITEURL; ?>admin/add-product.php" class="btn-primary">Add Product</a>
                <br/><br/><br/>

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['upload']))
                    {
                        echo $_SESSION['upload'];
                        unset($_SESSION['upload']);
                    }

                    if(isset($_SESSION['unauthorize']))
                    {
                        echo $_SESSION['unauthorize'];
                        unset($_SESSION['unauthorize']);
                    }

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                
                ?>

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Featured</th>
                    </tr>

                    <?php 
                        //Create a SQL Query to Get all the Food
                        $sql = "SELECT * FROM product";

                        //Execute the qUery
                        $res = mysqli_query($conn, $sql);

                        //Count Rows to check whether we have foods or not
                        $count = mysqli_num_rows($res);

                        //Create Serial Number VAriable and Set Default VAlue as 1
                        $sn=1;

                        if($count>0)
                        {
                            //We have food in Database
                            //Get the Foods from Database and Display
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //get the values from individual columns
                                $p_id = $row['p_id'];
                                $p_name = $row['p_name'];
                                $price = $row['price'];
                                $p_img = $row['p_img'];
                                $featured = $row['featured'];
                                ?>

                                <tr>
                                    <td><?php echo $sn++; ?>. </td>
                                    <td><?php echo $p_name; ?></td>
                                    <td>₹<?php echo $price; ?></td>
                                    <td>
                                        <?php  
                                            //CHeck whether we have image or not
                                            if($p_img=="")
                                            {
                                                //WE do not have image, DIslpay Error Message
                                                echo "<div class='error'>Image not Added.</div>";
                                            }
                                            else
                                            {
                                                //WE Have Image, Display Image
                                                ?>
                                                <img src="<?php echo SITEURL; ?>images/product/<?php echo $p_img; ?>" width="100px">
                                                <?php
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $featured; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-product.php?id=<?php echo $p_id; ?>" class="btn-secondary">Update Product</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-product.php?id=<?php echo $p_id; ?>&p_img=<?php echo $p_img; ?>" class="btn-danger">Delete Product</a>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        else
                        {
                            //Product not Added in Database
                            echo "<tr> <td colspan='7' class='error'> Product not Added Yet. </td> </tr>";
                        }

                    ?>

                    
                </table>
    </div>
</div>


<?php include('partials/footer.php') ?>