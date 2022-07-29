<?php     
echo "<h1>You Need to create at least two post to see all the post from that user</h1>";
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
        $sqll2 = "select * from perm_admin where username = '$username' and password = '$password'";
        $res2 = mysqli_query($con,$sqll2);
        $row12 = mysqli_fetch_array($res2,MYSQLI_ASSOC);
        $count12 = mysqli_num_rows($res2);


        if($count1){$admm=$username;

        echo $admm;?>
            <!DOCTYPE html>
<html lang="en">
    <title>
        Album
    </title>
    <head>
        <body>
            <div>
                <a href="removeacc.php">If you want to remove account</a>
                <br>
                <br>
                <a href="delete.php">If you want to delete post created By any user</a>
                <br>
                <br>
                <a href="update.php">If you want to Update post created By any user</a>
                <br>
                <br>
                <a href="permission.php">If you want to give permission to other user</a>
                <br>
                <br>
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                  <div>
                  <input type="text" id="title" name="title" placeholder="Enter Your Title" require="required"><br><br>
                  </div>
                  <div>
                  <input type="text" id="desc" name="desc" placeholder="Description"><br><br>
                  </div>
                  <?php $adm=$username;?>
                      <input type="text" id="user9" name="piic" value="<?php echo $username?>" placeholder="Type username for confirmation" mainength="<?php strlen($username)?>" maxlength="<?php strlen($username)?>"></input>
                  <br>
                  <br>
                  <div>
                    <input type="submit" name="submit" value="Publish">
                  </div>
                </form>
            </div>
        </body>
    </head>
</html>

<?php
        }else{
            if($count12){
                ?>
                <!DOCTYPE html>
    <html lang="en">
        <title>
            Album
        </title>
        <head>
            <body>
                <a href="delete.php">If you want to delete post created By any user</a>
                <br>
                <br>
                <a href="update.php">If you want to Update post created By any user</a>
                <div>
                    <form action="upload.php" method="POST" enctype="multipart/form-data">
                      <div>
                      <input type="text" id="title" name="title" placeholder="Enter Your Title" require="required"><br><br>
                      </div>
                      <div>
                      <input type="text" id="desc" name="desc" placeholder="Description"><br><br>
                      </div>
                      <?php $adm=$username;?>
                          <input type="text" id="user9" name="piic" value="<?php echo $username?>" placeholder="Type username for confirmation" mainength="<?php strlen($username)?>" maxlength="<?php strlen($username)?>"></input>
                      <br>
                      <br>
                      <div>
                        <input type="submit" name="submit" value="Publish">
                      </div>
                    </form>
                </div>
            </body>
        </head>
    </html>
    <?php
            }else{
                if($count == 1){?>
                    <!DOCTYPE html>
        <html lang="en">
            <title>
                Album
            </title>
            <head>
                <body>
                    <div>
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                          <div>
                          <input type="text" id="title" name="title" placeholder="Enter Your Title" require="required"><br><br>
                          </div>
                          <div>
                          <input type="text" id="desc" name="desc" placeholder="Description"><br><br>
                          </div>
                                <input type="text" id="user9" name="piic" value="<?php echo $username?>" placeholder="Type username for confirmation" mainength="<?php strlen($username)?>" maxlength="<?php strlen($username);?>"</input>
                          <br>
                          <br>
                          <div>
                            <input type="submit" name="submit" value="Publish">
                          </div>
                        </form>
                    </div>
                </body>
            </head>
        </html><?php
                    
                }else{
                    echo "no";
                }

            }
        }

        if($count1){
            include 'dbcon.php';
          $selectquery="select * from post"; 
          $query = mysqli_query($con,$selectquery);
          $result=mysqli_fetch_array($query);
          while($result = mysqli_fetch_array($query)){
          ?>
                  <div class="card-image" id="<?php echo $result['dbtitle']; ?>" name="<?php echo $result['dbtitle']; ?>" style="background-image: url('img/4.jpg');"><h2><?php echo $result['dbtitle']; ?></h2>
                    <br>
                    <p><?php echo $result['dbdesc']; ?></p>
                    <p>Created by <?php echo $result['pic'];?></p>
                  </div>
              <style>
          
                .card-image {
                  background-repeat: no-repeat;
                  background-position: 50% 50%;
                  margin:1rem;
                  border-radius:2rem;
                  background-size: cover;
                  background-color:RGB(235,125,22);
                  border-style: ridge;
                  float:left;
                  width: 300px;
                  height: 300px;
                }
              </style>
              <?php
          }
          
          
          }else{
            if($count12){
                include 'dbcon.php';
          $selectquery="select * from post"; 
          $query = mysqli_query($con,$selectquery);
          $result=mysqli_fetch_array($query);
          while($result = mysqli_fetch_array($query)){
          ?>
                  <div class="card-image" id="<?php echo $result['dbtitle']; ?>" name="<?php echo $result['dbtitle']; ?>" style="background-image: url('img/4.jpg');"><h2><?php echo $result['dbtitle']; ?></h2>
                    <br>
                    <p><?php echo $result['dbdesc']; ?></p>
                    <p>Created by <?php echo $result['pic'];?></p>
                  </div>
              <style>
          
                .card-image {
                  background-repeat: no-repeat;
                  background-position: 50% 50%;
                  background-size: cover;
                  border-radius:2rem;
                  background-color:yellow;
                  border-style: ridge;
                  float:left;
                  margin:1rem;
                  width: 300px;
                  height: 300px;
                }
              </style>
              <?php
          }
                
            }else{
                if($count ==1){
                    include 'dbcon.php';
                    echo $username;
                  $selectquery="select * from post WHERE pic='$username'"; 
                  $query = mysqli_query($con,$selectquery);
                  $result=mysqli_fetch_array($query);
                  while($result = mysqli_fetch_array($query)){
                  ?>
                          <div class="card-image" id="<?php echo $result['dbtitle']; ?>" name="<?php echo $result['dbtitle']; ?>" style="background-image: url('img/4.jpg');"><h2><?php echo $result['dbtitle']; ?></h2>
                            <br>
                            <p><?php echo $result['dbdesc']; ?></p>
                            <p>Created by <?php echo $result['pic'];?></p>
                          </div>
                      <style>
                  
                        .card-image {
                          background-repeat: no-repeat;
                          background-position: 50% 50%;
                          background-size: cover;
                          margin:1rem;
                          border-radius:2rem;
                          background-color:rgb(0,255,255);
                          border-style: ridge;
                          float:left;
                          width: 300px;
                          height: 300px;
                        }
                      </style>
                      <?php
                  }
    
                }else{
                    echo "Nothing here";
                }

            }
            
          }
