<!DOCTYPE html>
<html lang="en">
    <title>
        Permission
    </title>
    <head>
        <body>
            <div>
                <form action="" method="POST">
                  <div>
                  <input type="text" id="title" name="title" placeholder="Enter Your Title" require="required"><br><br>
                  <input type="text" id="password" name="password" placeholder="Enter Your Password" require="required"><br><br>
                  </div>
                  <div>
                    <input type="submit" name="submit" value="Give Permission">
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
$first=($_POST['title']);
$ps=($_POST['password']);
$sql = "INSERT INTO `id19341283_alpesh`.`perm_admin` (`username`,`password`) VALUES ('$first','$ps')"; //here we need to make change
if($con->query($sql)>0){
    echo "<div class='alert alert-success' role='alert'>
    Permission has been given successfully
  </div>
  ";
}
else{
    echo "Something went wrong";
}



?>
