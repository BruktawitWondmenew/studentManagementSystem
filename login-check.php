  <?php
error_reporting(0);       //=> else { echo "username and pass not match";}
session_start();
  $host="localhost";
  $user="root";
  $password="";
  $db="schoolproject";
  $data=mysqli_connect($host,$user,$password,$db);

if($data===false){
    die("connection error");
}
if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $pass=$_POST['password'];
    $sql="select * from users where username='".$name."'AND password='".$pass."' ";

    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="student")
    {
        // alert("success");
        // $msg="success";
        // $_SESSION['loginMessage']=$msg;
        $_SESSION['username']=$name;
        $_SESSION['usertype']="student";
     header("location:studenthome.php");
        }
    else if($row["usertype"]=="admin"){
        // alert("success");
        // $msg="success";
        // $_SESSION['loginMessage']=$msg;
        $_SESSION['username']=$name;
        $_SESSION['usertype']="admin";
        header("location:adminhome.php");
    }
    else {

        $message= "<div class='alert alert-danger' style='width: 25%;'>
        username and pass not match</div>";
        $_SESSION['loginMessage']=$message;
        header("location:login.php");
    }
}
  ?>