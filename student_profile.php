<?php
session_start();
if(!isset($_SESSION['username'])){

    header("location:login.php");
}
elseif($_SESSION['usertype']=="admin"){
    header("location:login.php");
}
$host="localhost";
$user="root";
$password="";
$db="schoolproject";


$data=mysqli_connect($host,$user,$password,$db);


$name=$_SESSION['username'];

$
sql="SELECT * from users WHERE username='$name' ";
$result=mysqli_query($data,$sql);
// $info=$result->fetch_assoc();
$info=mysqli_fetch_assoc($result);


if(isset($_POST['update_profile']))
{   
    $s_email=$_POST['email'];
    $s_phone=$_POST['phone'];
    $s_password=$_POST['password'];

    $sql2="UPDATE users SET password='$s_password',email='$s_email',phone='$s_phone', WHERE username='$name'  ";
    $result2=mysqli_query($data,$sql2);


    if($result2){
      header('location:student_profile.php');
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dshboard</title>
   <?php
include 'student_css.php';
   ?>
   
   <style>

    label{
        display:inline-block;
        width:100px;
        text-align:right;
        padding:10px 0;
    }
    .div_deg{
        background-color:skyblue;
        width:500px;
        padding:70px 0;
    }
   </style>
   </head>
<body>
  <?php


include 'student_sidebar.php';
  ?>
 <div class="content ">
    <center>]
        <h1>Update Profile</h1>
        <br> <br>
        <form action="#" method="POST">
        <div class="div_deg">
    <div>
    <label for="">Email</label>
    <input type="email" name="email" value="<?php echo "{$info['email']}"  ?>">
   </div>
   <div>
    <label for="">Phone</label>
    <input type="number" name="phone" value="<?php echo "{$info['phone']}" ?>">
   </div>
   <div>
    <label for="">password</label>
    <input type="text" name="password" value="<?php echo "{$info['password']}" ?>">
   </div>
   <div>
    <input type="submit" name="update_profile" class="btn btn-primary" value="Update">
   </div>
   </div>
   </form>
   </center>
</div>
</body>
</html>