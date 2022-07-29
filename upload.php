<?php
include 'dbcon.php';
include('dbcon.php');
include('authentication.php');


if(isset($_POST['submit']))
    $title=$_POST['title'];
    $desc=$_POST['desc'];
    $file=$_POST['piic'];
        $insertquery =" insert into post(dbtitle,dbdesc,pic) values('$title','$desc','$file')";
        $query= mysqli_query($con,$insertquery);
        if($query){
            echo "suc"; 
        }else{
            echo "nopeee";
        }
        mysqli_close($con);


    

?>
