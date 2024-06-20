
<?php
session_start();
if(!isset($_SESSION['username'])){

    header("location:login.php");
}
elseif($_SESSION['usertype']=="student"){
    header("location:login.php");
}
$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

$id=$_GET['student_id'];
$sql="SELECT * FROM users WHERE id='$id'  ";
$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();

if(isset($_POST['update']))
{
    $name=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $query="UPDATE users SET email='$email',phone='$phone',password='$password' WHERE id='$id'  ";
     $result2=mysqli_query($data,$query);
     if($result2){
        header("location:view_student.php");
     }


}


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dshboard</title>
   <?php
    include 'admin_css.php';
        ?>
    </head>
    <style>

label{
    width: 100px;
    text-align:right;
    padding:10px 0;
}
.div_deg{
    background-color:skyblue;
    padding:70px 0px;
    width: 400px;
}
    </style>
<body>
  <?php
include 'admin_sidebar.php';
?>

 <div class="content">
 <center>
    <h1>Update Student</h1>

    <div class="div_deg">
        <form action="#" method="POST">
            <div>
                <label for="">Username</label>
                <input type="text" disabled name="username" value="<?php   echo "{$info['username']}";?>">
            </div>
            <div>
                <label for="">email</label>
                <input type="email" name="email" value="<?php   echo "{$info['email']}";?>">
            </div>
            <div>
                <label for="">phone</label>
                <input type="number" name="phone" value="<?php   echo "{$info['phone']}";?>">
            </div>
            <div>
                <label for="">password</label>
                <input type="text" name="password" value="<?php   echo "{$info['password']}";?>">
            </div>
            <div>
                
                <input type="submit" name="update" value="Update" class="btn btn-success">
            </div>
        </form>
    </div>
   

</center>
</div>
</body>
</html>