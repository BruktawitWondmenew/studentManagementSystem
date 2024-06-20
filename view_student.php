
<?php
error_reporting(0);  //for session
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
$sql="SELECT * FROM users WHERE usertype='student'";
$result=mysqli_query($data,$sql);





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dshboard</title>
    <style>
            .table_th{
                padding:20px;
                font-size:20px;
            }
            .table_td{
                padding:20px;
                background-color:skyblue;
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
<center>
 <div class="content"> 
    <h1>Student Data</h1>
   
<?php

if($_SESSION['message']){
   echo $_SESSION['message'];
}
unset($_SESSION['message']);    // mns delete z msg if we Refresh it.

?>
    <br>
    <table  border="3px solid gray";>
        <tr>
            <th class="table_th">UserName</th>
            <th class="table_th">Email</th>
            <th class="table_th">Phone</th>
            <th class="table_th">Password</th>
            <th class="table_th">Delete</th>
            <th class="table_th">Update</th>
        </tr>

        <?php
    while($info=$result->fetch_assoc()){
        
    



        ?>
        <tr>
            <td class="table_td">
            <?php echo "{$info['username']}"?></td>
            <td class="table_td">
            <?php echo "{$info['email']}"?></td>
            <td class="table_td">
            <?php echo "{$info['phone']}"?></td>
            <td class="table_td">
            <?php echo "{$info['password']}"?></td>
            <td class="table_td">
            <?php echo "<a  onclick=\"javascript:return confirm('Are You Sure to Delete This?');   \" href='delete.php?student_id={$info['id']}'  class='btn btn-danger'>Delete    <?a>"?></td>
            <td class="table_td">
            <?php echo "<a href='update_student.php?student_id={$info['id']}' class='btn btn-primary'>Update</a>" ;?></td>
        </tr>
        </tr>
        <?php }
        ?>
    </table>
   
</div>
</center>
</body>
</html>