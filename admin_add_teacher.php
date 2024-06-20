
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
if(isset($_POST['add_teacher']))
{
$t_name=$_POST['name'];
$t_description=$_POST['description'];
$file=$_FILES['image']['name'];
$dst="./image/".$file;
$dst_db="image/".$file;
move_uploaded_file($_FILES['image']['tmp_name'],$dst);
$sql="INSERT INTO teacher(name,description,image) VALUES('$t_name','$t_description','$dst_db')"  ;
$result=mysqli_query($data,$sql);
if($result){
    header('location:admin_add_teacher.php');
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
    include 'admin_css.php';
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
include 'admin_sidebar.php';
?>
 <div class="content">
    <center>
    <h1>Add Teacher</h1>
    <br><br>



    <form action="#" method="POST"  enctype="multipart/form-data">
    <div class="div_deg">    
    <div>
            <label for="">Teacher Name:</label>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label for="">Description:</label>
            <textarea name="description" id=""></textarea>
        </div>
        <div>
            <label for="">Image:</label>
            <input type="file" name="image" id="">
        </div>
        <div>
            <input type="submit" name="add_teacher" value="Add Teacher" class="btn btn-primary"id="">
        </div>
    </form>
  </div>
    </center>
</div>
</body>
</html>