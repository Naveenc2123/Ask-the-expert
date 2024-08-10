<?php
session_start();
$id=$_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">


<title>Ask the Expert</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
  body {
    background-color: lightblue;
    font-family: 'Arial', sans-serif;
  }

  .container {
    padding-top: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .login-box {
    background: pink;
    padding: 50px;
    border-radius: 20px;
    box-shadow: 10px 10px 20px 10px rgba(0, 0, 0, 0.1);
  }

  .login-box h3 {
    margin-bottom: 30px;
    font-weight: 600;
    color: whitesmoke;
  }

  .form-label {
    font-weight: 800;
    font-stretch: extra-expanded;

  }

  .form-control {
    border-radius: 5px;
  }

  .btn {
    width: 100%;
    padding: 10px;
    background-color: blue;
    border: none;
    border-radius: 5px;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .btn:hover {
    background-color: blueviolet;
  }

  .form-group {
    margin-bottom: 20px;
  }

  .text-center {
    text-align: center;
  }
</style>

</head>

<body>
  <div class="container">
    <div class="login-box">
      <form name="login" method="post">
        <h3 class="text-center">USER LOGIN</h3>
        <div class="form-group">
<label for="" class="form-label">ID</label><br>
<input type="text" name="id" placeholder="enter your id" class="form-control">
        </div>
        <div class="form-group">
        <label for="" class="form-label">PASSWORD</label><br>
        <input type="text" name="pass" placeholder="enter your password" class="form-control">
        </div>
        <input type="submit" class="btn" name="sub" value="login">
       <a href="">forgot password?</a>
    
  
  

  <div class="signup">
    <h5>
      <center>sign up with
        <button type="button" class="btn1 ">
          <i class="bi bi-google"></i>
        </button>
        <button type="button" class="btn1">
          <i class="bi bi-facebook"></i>
        </button>
      </center>
    </h5>



    
  <p>Do not have the account? <a href="sp register.php">click here to register</a>


  </p>
  </div>
  </div>
  </div>
  </div>
      </form>
      <?php
                    $servername = "localhost";
                    $user = "root";
                    $password = "";
                    $db = "registeration";
                    $con = mysqli_connect($servername, $user, $password, $db);
                    if (isset($_POST["sub"])) {
                      $username = $_POST["id"];
                      $pass = $_POST["pass"];
                      if ($con) {
                        $q = "select * from specialist_register where specialist_id='$username' and password='$pass'";
                        $sq = mysqli_query($con, $q);
                        if ($ro = mysqli_fetch_row($sq)){
                          session_start();
                          $_SESSION["id"] = $id;
                          echo
            "<script>
            alert('Login successfully');
             document.location='spdash.php';
            </script>";
                        }
                        else{
                          echo
            "<script>
            alert('please enter the valid userid and password');
             document.location='splogin.php';
            </script>";
                        }}}?>
    </div>
  </div>
 