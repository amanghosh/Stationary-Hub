<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>

        <br><br>

        <?php 
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

            <br><br>
        <!--Add Category Form Starts Here enctype property will allow us to upload file image -->

        <form action="" method="POST" enctype= "multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Category Title">
                    </td>
                </tr>
                <tr>
                    <td>Select Image: </td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes
                        <input type="radio" name="featured" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td> Active</td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes
                        <input type="radio" name="active" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                    </td>
                </tr>


            </table>

        </form>
        <!--Add Category Form Ends Here-->
        <?php 
        
            // check whether the submit button is clicked or not
            if(isset($_POST['submit']))
            {
               // echo "Button Clicked !";

               // 1. Get the Value From  Category Form
               $title = $_POST['title'];

               // For Radio input type, we need to check whether the button is selected or not 
               if(isset($_POST['featured']))
               {
                   // get the value from form
                   $featured = $_POST['featured'];
               }
               else
               {
                   // set the default value
                   $featured = "No";
               }

               if(isset($_POST['active']))
               {
                   $active = $_POST['active'];
               }
               else
               {
                   $active = "No";
               }

               // Check Whether the Image is Selected or Not and Set the Value for Image name Accordingly

                // print_r($_FILES['image']);
              
               // die(); // Break the code here

              if(isset($_FILES['image']['name']))
              {
                  //Upload the image
                  // to upload the image, we need the image name, source path, and destination path
                  $image_name = $_FILES['image']['name'];
                 
                  // upload image only if image is selected
                  if($image_name != "")
                  {

                 
                  
                        // Auto Rename Our Image
                        // Get the Extension of our image (jpg, png, gif, etc) e.g. "food1.jpg"
                        $ext = end(explode('.', $image_name));

                        // Rename the Image
                        $image_name = "Food_Category_".rand(000, 999).'.'.$ext; // our image name will be like this eg. Food_category_834.jpg

                        $source_path = $_FILES['image']['tmp_name'];

                        $destination_path = "../images/category/".$image_name;

                        // Finally Upload the Image
                        $upload = move_uploaded_file($source_path, $destination_path);

                        //check whether the image is uploaded or not
                        //And if the image is not uploaded then we'll stop the process and redirect with error message
                        if($upload==false)
                        {
                            // set message
                            $_SESSION['upload'] = "<div class='error'>Failed to upload Image... </div>";
                            // redierct to Add Category Page
                            header('location:'.SITEURL.'admin/add-category.php');
                            //stop the process
                            die();
                          }
                     }
                 }
              else
              {
                  // don't upload image and set the image_name value as blank
                  $image_name="";
              }

               // 2. Create SQL query to insert category into database
               $sql = "INSERT INTO tbl_category SET
                    title='$title',
                    image_name='$image_name',
                    featured='$featured' ,
                    active='$active'  
               ";

               // 3. execute the query and save it in database
               $res = mysqli_query($conn , $sql);

               // 4. check whether the query executed or not data added or not
               if($res==true)
               {
                   // query executed and category added
                   $_SESSION['add'] = "<div class='success'> Category Added Successfully ! </div>";
                   // redirect to manage category page
                    header('location:'.SITEURL. 'admin/manage-category.php');
               }
               else
               {
                   // failed to add category

                   $_SESSION['add'] = "<div class ='error'>Failed To Add Category...</div>";
                   // redirect to manage category page
                    header('location:'.SITEURL. 'admin/manage-category.php');
               }
           }
          
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>