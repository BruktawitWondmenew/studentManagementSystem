<?php
session_start();
if(!isset($_SESSION['username'])){

    header("location:login.php");
}
elseif($_SESSION['usertype']=="student"){
    header("location:login.php");
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

        <style>
            label{
                
            display:inline;
            text-align:right;
            width:150px;
            padding-top:10px 0px;  
            font-size:10px
            }
            .form_deg{
            background-color:skyblue;
            width: 600px;
            padding:70px 0;
         }
         input{
            margin-bottom:10px;
         }
        </style>
    </head>
<body>
  <?php
include 'admin_sidebar.php';
?>
 <div class="content">
    <center>
            <h1>Update Teacher Data</h1>
            <br>
    <div class=>
        <form  class="form_deg" action="#" method="POST">
            <div>
                <label for="">Teacher Name</label>
                <input type="text"  name="name">
            </div>
            <div>
                <label for="">About Teacher</label>
                  <textarea name="description" id=""></textarea>
            </div>
            <div>
                <label for="">Old image</label>
                <img src="" alt="">
            </div>
            <div>
                <label for="">New image</label>
                <input type="file"  name="name">
            </div>
            <div>
                <input type="submit"class="btn btn-promary" name="update_teacher">
            </div>
        </form> 
   </div>

   </center>
</div>
</body>
</html>