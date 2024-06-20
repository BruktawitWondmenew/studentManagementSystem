
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body background="bdu.png" style=" 
background-color:rgba(128, 128, 128);
background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;"class="body-deg">

</div>

    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <div class="form-deg card mt-5">
            <div class="card-body">
          
                Login Form
                <?php
                error_reporting(0);
                session_start();
                session_destroy();
                echo $_SESSION['loginMessage'];
                
                ?>
            
            <form action="login-check.php"method="POST" class="login-form">
                <div>
                    <label class="label-deg" for="">UserName</label>
                    <input type="text" class="form-control" placeholder="Enter Username" name="username">
                </div>
                <div>
                    <label class="label-deg"for="">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password"  name="password">
                </div>
                <div>
                    <input type="submit"class="btn btn-primary mt-2 btn-block" name="submit"value="Login">
                </div>
            </form>
        </div>
        </div>
    </div>
    <div class="col-md-4"></div>
    </div>
      

</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
</html>