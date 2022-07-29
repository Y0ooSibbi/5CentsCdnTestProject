<!DOCTYPE html>
<html lang="en">
    <title>
        Update
    </title>
    <head>
        <body>
            <div>
                <form action="" method="POST">
                  <div>
                  <input type="text" id="title" name="title" placeholder="Enter Your Title" require="required"><br><br>
                  <input type="text" id="uptitle" name="uptitle" placeholder="Update Title Name" require="required"><br><br>
                  <input type="text" id="desc" name="updesc" placeholder="Update Desc Name" require="required"><br><br>

                  </div>
                  <div>
                    <input type="submit" name="submit" value="Update">
                  </div>
                </form>
            </div>
        </body>
    </head>
</html>
<?php 
include('dbcon.php');
$con =mysqli_connect($server,$user,$password,$db);
$sql = 'SELECT * FROM `perm_admin`';
$title=$_POST['title'];
$uptitle=$_POST['uptitle'];
$updesc=$_POST['updesc'];
echo $title;
echo $uptitle;
echo $updesc;
if(isset($_POST['submit'])){
    mysqli_query($con,"UPDATE `post` SET `dbtitle`='$uptitle',`dbdesc`='$updesc' WHERE dbtitle='$title'");

}

?>
