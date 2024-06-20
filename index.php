<?php
 error_reporting(0);
 session_start();
 session_destroy();
 if($_SESSION['message']){
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
 }
 $host="localhost";
 $user="root";
 $password="";
 $db="schoolproject";
 
 $data=mysqli_connect($host,$user,$password,$db);
 $sql="SELECT * FROM teacher";
 $result=mysqli_query($data,$sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentManagementSystem</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <label class="logo">ALX learning</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>
  <div class="section1">
  <label for="" class="img-text">We teach students with care</label>
  <img src="school-img.png" class="main-img" alt="">
  </div>
  <div class="container">

 <div class="row">
  <div class="col-md-4">
    <img class="welcome_img" src="school1.png" alt="">
  </div>
  <div class="col-md-8">
<h1>Welcome to ALX Learning</h1>
<p>In ordinary English, a queue is defined as a waiting line, like a line of people waiting to purchase tickets, where the first person in line is the first person served.
In computer applications, a queue is a set of elements of the same type in which the elements are added at one end, called the back or rear, and deleted from the other end, called the front/head.
Unlike stacks, a queue is open at both its ends. 
One end is always used to insert data (enqueue) and 
The other is used to remove data (dequeue).
Queues are also called first-in, first-out lists, or FIFO
</p>
  </div>
 </div>
</div>
<center><h1>Our Teachers</h1></center>
<div class="container">
    <div class="row">
        <?php  
        while($info=$result->fetch_assoc()){?>
        


         
        <div class="col-md-4">
         <img class="teacher" src="<?php   echo"{$info['image']}" ?>" alt="">
         <h3><?php   echo"{$info['name']}" ?></h3>
         <h5><?php   echo"{$info['description']}" ?></h5>

       </div>
       <?php  }
?>
    </div>

</div>

<center><h1>Our Courses</h1></center>
<div class="container">
    <div class="row">
        <div class="col-md-4">
         <img class="teacher" src="dice1.png" alt="">
         <h1>Graphics Design</h1>
        
        </div>
        <div class="col-md-4">
        <img class="teacher" src="dice2.png" alt="">
        <h1>Marketing</h1>
           </div>
         <div class="col-md-4">
         <img class="teacher" src="dice3.png" alt="">
         <h1>Web Development</h1>
          </div>

    </div>
</div>
<center><h1 class="adm">Admission Form</h1></center>
<div align="center" class="admission_form">  
    <form action="data_check.php"method="POST" class="forms">
        <div class="div-input">
            <label class="label_text">Name</label>
            <input class="input-deg"type="text" name="name">
        </div>
        <div class="div-input">
            <label class="label_text" for="">Email</label>
            <input class="input-deg" type="email" name="email">
        </div>
        <div class="div-input">
            <label class="label_text" for="">Phone</label>
            <input class="input-deg" type="text" name="phone">
        </div>
        <div class="div-input">
            <label class="label_text" for="" >Message</label>
            <textarea class="input-txt" name="message"></textarea>
        </div>
        <div class="div-input">
            <input class="btn btn-primary" type="submit" name="apply" id="submit" value="apply">
        </div>
    </form>
</div>
<footer>
    <h2 class="footer-txt">All @copyright reserved by BW.BDUtech</h2>
</footer>
</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
</html>