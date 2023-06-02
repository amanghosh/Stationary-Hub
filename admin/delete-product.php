<?php 
    //Include Constants Page
    include('../config/constants.php');


    if(isset($_GET['p_id']) && isset($_GET['p_img'])) //Either use '&&' or 'AND'
    {
        //Process to Delete
        //echo "Process to Delete";

        //1.  Get ID and Image NAme
        $p_id = $_GET['p_id'];
        $p_img = $_GET['p_img'];

        //2. Remove the Image if Available
        //CHeck whether the image is available or not and Delete only if available
        if($p_img != "")
        {
            // IT has image and need to remove from folder
            //Get the Image Path
            $path = "../images/product/".$p_img;

            //REmove Image File from Folder
            $remove = unlink($path);

            //Check whether the image is removed or not
            if($remove==false)
            {
                //Failed to Remove image
                $_SESSION['upload'] = "<div class='error'>Failed to Remove Image File.</div>";
                //Redirect to Manage Food
                header('location:'.SITEURL.'admin/manage-food.php');
                //Stop the Process of Deleting Food
                die();
            }

        }

        //3. Delete Food from Database
        $sql = "DELETE FROM product WHERE p_id=$p_id";
        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //CHeck whether the query executed or not and set the session message respectively
        //4. Redirect to Manage Product with Session Message
        if($res==true)
        {
            //Product Deleted
            $_SESSION['delete'] = "<div class='success'>Product Deleted Successfully.</div>";
            header('location:'.SITEURL.'admin/manage-product.php');
        }
        else
        {
            //Failed to Delete Food
            $_SESSION['delete'] = "<div class='error'>Failed to Delete Food.</div>";
            header('location:'.SITEURL.'admin/manage-product.php');
        }

        

    }
    else
    {
        //Redirect to Manage Food Page
        //echo "Redirect";
        $_SESSION['unauthorize'] = "<div class='error'>Unauthorized Access.</div>";
        header('location:'.SITEURL.'admin/manage-product.php');
    }

?>