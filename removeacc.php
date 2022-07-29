<!DOCTYPE html>
<html lang="en">
    <title>
        Delete
    </title>
    <head>
        <body>
            <div>
                <form action="" method="POST">
                  <div>
                  <input type="text" id="title" name="title" placeholder="Enter Your Title" require="required"><br><br>
                  </div>
                  <div>
                    <input type="submit" name="submit" value="Unpublish">
                  </div>
                </form>
            </div>
        </body>
    </head>
</html>
<?php
include "dbcon.php";
$query = "select * from post";  
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    if(mysqli_query($con,"DELETE FROM login_page_ WHERE username='".$title."'")){
        echo "Account Removed Successfully";
    }else{
        echo "";
    }
    if(mysqli_query($con,"DELETE FROM perm_admin WHERE username='".$title."'")){
        echo "all permission removed successfully";

    }else{
        echo "";
    };
}

?>
