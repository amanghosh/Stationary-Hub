<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Category</h1>

        <br/><br/><br/>
        <?php 
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        
        ?>
        <br><br>

                <!----Buttom to Add Category---->
                <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-primary">Add Category</a>
                <br/><br/><br/>


                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Featured</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    
                    //Query to Get all CAtegories from Database
                    $sql = "SELECT * FROM category";

                    //Execute Query
                    $res = mysqli_query($conn, $sql);

                    //Count Rows
                    $count = mysqli_num_rows($res);

                    //Create Serial Number Variable and assign value as 1
                    $sn=1;

                    //Check whether we have data in database or not
                    if($count>0)
                    {
                        //We have data in database
                        //get the data and display
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $cat_id = $row['cat_id'];
                            $cat_name = $row['cat_name'];
                            $image_name = $row['image_name'];
                            $featured = $row['featured'];

                            ?>

                                <tr>
                                    <td><?php echo $sn++; ?>. </td>
                                    <td><?php echo $cat_name; ?></td>

                                    <td>

                                        <?php  
                                            //Chcek whether image name is available or not
                                            if($image_name!="")
                                            {
                                                //Display the Image
                                                ?>
                                                
                                                <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" width="100px" >
                                                
                                                <?php
                                            }
                                            else
                                            {
                                                //Display the Message
                                                echo "<div class='error'>Image not Added.</div>";
                                            }
                                        ?>

                                    </td>

                                    <td><?php echo $featured; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-category.php?id=<?php echo $cat_id; ?>" class="btn-secondary">Update Category</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-category.php?id=<?php echo $cat_id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete Category</a>
                                    </td>
                                </tr>

                            <?php

                        }
                    }
                    else
                    {
                        //WE do not have data
                        //We'll display the message inside table
                        ?>

                        <tr>
                            <td colspan="6"><div class="error">No Category Added.</div></td>
                        </tr>

                        <?php
                    }

                ?>

                    
            </table>

    </div>
</div>


<?php include('partials/footer.php') ?>