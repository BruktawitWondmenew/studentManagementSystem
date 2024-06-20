
<?php
session_start();
if(!isset($_SESSION['username'])){

    header("location:login.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}
$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['add_student']))
{
    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
   $user_password=$_POST['password'];
   $usertype="student";
  $check="SELECT * FROM users WHERE username='$username'";
  $check_user=mysqli_query($data,$check);
  $row_count=mysqli_num_rows($check_user);
   if($row_count==1){
    echo "<script type='text/javascript'>
    alert( 'username already exist.Try another one');
    </script>";
   }
   else
   {
   $sql="INSERT INTO users(username,email,phone,usertype,password)
   VALUES('$username','$user_email','$user_phone','$usertype','$user_password')";

$result=mysqli_query($data,$sql);

if($result){
    echo "<script type='text/javascript'>
    alert( 'data upload successfuly');
    </script>";
}
else{
    echo "Upload failed";
}
   }

}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dshboard</title>
    <style type="text/css">
        label{
            display:inline-block;
            text-align:right;
            width:100px;
            padding-top:10px;
            padding-bottom:10px;
        }
        .div-deg{
            background-color:skyblue;
            width:400px;
            padding-top:70px;
            padding-bottom:70px;
        }
    </style>
   <?php
    include 'admin_css.php';
        ?>
    </head>
<body>
  <?php
include 'admin_sidebar.php';
?>
 <div class="content">
    <h1>Add Student</h1>
    <center>
    <h1>Add Student</h1>
   <div class="div-deg">
    <form action="#" method="POST">
<div>
    <label for="">username</label>
    <input type="text" name="name" id="">
</div>
<div>
    <label for="">email</label>
    <input type="email" name="email" id="">
</div>
<div>
    <label for="">phone</label>
    <input type="number" name="phone" id="">
</div>
<div>
    <label for="">password</label>
    <input type="text" name="password" id="">
</div>
<div>
    <input type="submit"class="btn btn-primary" name="add_student" value="Add Student"id="">
</div>
    </form>
   </div>
   </center>
   
</div>
</body>
</html>