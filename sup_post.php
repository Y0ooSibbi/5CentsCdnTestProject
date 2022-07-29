<?php
include('dbcon.php');
// include('createrAccount.php');

$username = $_POST['user'];  
$password = $_POST['pass'];
  
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
  
    $sql = "select *from login_page_ where username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);
    $sqll = "select * from super_admin where username = '$username' and password = '$password'";
    $res = mysqli_query($con,$sqll);
    $row1 = mysqli_fetch_array($res,MYSQLI_ASSOC);
    $count1 = mysqli_num_rows($res);




if($count1>1){
  include 'dbcon.php';
$selectquery="select * from post"; 
$query = mysqli_query($con,$selectquery);
$result=mysqli_fetch_array($query);
while($result = mysqli_fetch_array($query)){
?>
        <div class="card-image" id="<?php echo $result['dbtitle']; ?>" name="<?php echo $result['dbtitle']; ?>" style="background-image: url('img/4.jpg');"><h3><?php echo $result['dbtitle']; ?></h3>
          <br>
          <p><?php echo $result['dbdesc']; ?></p>
          <p>Created by <?php echo $result['pic'];?></p>
        </div>
    <style>

      .card-image {
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-size: cover;
        background-color:yellow;
        border-style: ridge;
        float:left;
        width: 300px;
        height: 300px;
      }
    </style>
    <?php
}


}else{
  echo "normal login";
}
?>
