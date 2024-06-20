<?php
error_reporting(0);
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
$sql="SELECT * from teacher";
$result=mysqli_query($data,$sql);
  if($_GET['teacher_id']){
     $t_id=$_GET['teacher_id'];

     $sql2="DELETE FROM teacher WHERE id='$t_id'";
     $result2=mysqli_query($data,$sql2);
if($result){

 header("location:admin_view_teacher.php");   //after delete display z refreshed page/table.
}

  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dshboard</title>
   <?php
include 'admin_css.php';
   ?>

   <style>
    .table_th{
        padding:20px;
       font-size:20px;  
       border:1px; 
     }
     .table_td{
        padding:20px;
        background-color:skyblue;
        border:"1px"; 
     }

   </style>
   </head>
<body>
  <?php
include 'admin_sidebar.php';
  ?>
 <div class="content">
    <center>
    <h1>View All Teachers Data</h1>

       <div class="container ml-5 mr-5">
 
    
 
  <table class="table table-bordered table-hover ml-5 mr-5">
        <tr>
            <th class="table_th">Teacher Name</th>
            <th class="table_th">About Teacher</th>
            <th class="table_th">Image</th>
            <th class="table_th">Delete</th>
            <th class="table_th">Update</th>
            <?php
     while($info=$result->fetch_assoc()){      
?>
          <tr>
            <td class="table_td"><?php echo" {$info['name']}"  ?> </td>
            <td class="table_td"><?php echo" {$info['description']}"  ?> </td>
            <td class="table_td"><img height="100px" style="width:80px;height:80px;border-radius:50%; "  border="1px solid black" src="<?php echo" {$info['image']}"  ?>" alt=""> </td>
            <td class="table_td"><?php echo "<a onclick=\" javascript:return confirm('Are You Sure To Delete This?');\" href='admin_view_teacher.php?teacher_id={$info['id']}' class='btn btn-danger'>Delete</a>"?> </td>
            <td class="table_td"><?php echo "<a href='admin_update_teacher.php?teacher_id={$info['id']}' class='btn btn-primary'>Update</a>" ; ?></td>

          </tr>
        </tr>


        <?php  }
        ?>
    </table>
   
    </div>
    </center>
</body>
</html>