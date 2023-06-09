<?php include('partials/menu.php'); ?>

        <!----Main Content Section Starts--->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                <br/>

                <?php
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add']; //Displaying Session Message
                        unset($_SESSION['add']); //REmoving Session Message
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                ?>
                </br></br>



                <!----Buttom to Add Admin---->
                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                <br/><br/><br/>


                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                        //Query to Get all Admin
                        $sql = "SELECT * FROM admin";
                        //Execute the Query
                        $res = mysqli_query($conn, $sql);
                        
                        //CHeck whether the Query is Executed of Not
                        if($res==TRUE)
                        {
                            // Count Rows to CHeck whether we have data in database or not
                            $count = mysqli_num_rows($res); // Function to get all the rows in database

                            $sn=1; //Create a Variable and Assign the value

                            //CHeck the num of rows
                            if($count>0)
                            {
                                //WE Have data in database
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    //Using While loop to get all the data from database.
                                    //And while loop will run as long as we have data in database

                                    //Get individual Data
                                    $id=$rows['a_id'];
                                    $full_name=$rows['a_name'];
                                    $username=$rows['username'];

                                    //Display the Values in our Table
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
                                        </td>
                                    </tr>

                                    <?php

                                }
                            }
                            else
                            {
                                //We Do not Have Data in Database
                            }
                        }
                    ?>


                    
                </table>

            </div>
        </div>
        <!----Main Content Section Starts--->

<?php include('partials/footer.php') ?>