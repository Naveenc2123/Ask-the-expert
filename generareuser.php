<?php
session_start();
$id=$_SESSION["id"];
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registeration";

$con = mysqli_connect($servername, $username, $password, $dbname);



$q = "SELECT * FROM user_register where id=$id";
$sq = mysqli_query($con, $q);
if ($r = mysqli_fetch_row($sq)) {
  $n = $r[0];
} else {
  $n = 0;
}

$z = "";
if ($n <= 9) {
  $z = "000";
} elseif ($n >= 10 && $n <= 99) {
  $z = "00";
} elseif ($n >= 100 && $n <= 999) {
  $z = "0";
}

$userid = "USER24" . $z . ($n );
$q_name = "SELECT name FROM user_register WHERE id= $id";
$sq_name = mysqli_query($con, $q_name);

if ($r_name = mysqli_fetch_assoc($sq_name)) {
    $name = $r_name['name'];
} else {
    $name = "";
}

$pass = strrev(substr($name, 0, 4));


if (strlen($password) < 4) {
    $pass = str_pad($pass, 4, 'X');
}
?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/PHPMailer/src/Exception.php';
require './PHPMailer/PHPMailer/src/PHPMailer.php';
require './PHPMailer/PHPMailer/src/SMTP.php';
function sendmail($name,$email){
  $name=htmlentities($name);
  $email=htmlentities($email);
  $mailsender="naveen";
  $message="hi  your id is ";
  $mail = new PHPMailer(true);
  $mail->isSMTP(); 
  $mail->Host       = 'smtp.gmail.com';                    
  $mail->SMTPAuth   = true;                                   
  $mail->Username   = 'naveen21232244@gmail.com';                    
  $mail->Password   = 'obyx cczt japq smuw';  
  $mail->Port       = 465;   
  $mail->SMTPSecure = 'ssl';            
  $mail->isHTML(true); 
  $mail->setFrom($email,$mailsender); 
  $mail->addAddress($email);                                   
  $mail->Subject = ("verfication mail");
  $mail->Body    = $message;
  $mail->send();      
}



   
    
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
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-box {
      background: grey;
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
  <h1>ASK THE EXPERT</h1>
  <div class="container">
    <div class="login-box">
      <form name="login" method="post">
        <h3 class="text-center">permission access</h3>
        <div class="form-group">
          <?php
          echo "<label for='name' class='form-label'> ID</label>
          <input type='text' name='userid' value='$userid' class='form-control' placeholder='owner-id' readonly>";
          ?>
        </div>
        <div class="form-group">
          <?php
          echo "<label for='name' class='form-label'> password</label>
          <input type='text' name='pass' value='$pass' class='form-control' placeholder='owner-id' readonly>";
          ?>
        </div>
        <button type="submit" class="btn" name="sub">send mail</button>
      </form>
    </div>
  </div>
  <?php
  if (isset($_POST["sub"])) {
    $spid = $_POST["userid"];
    $pass = $_POST["pass"];


    $sql = "update user_register set user_id='$spid' ,password='$pass',status='approved' where id=$id ";

    $sq = mysqli_query($con, $sql); {
     
    }
  }
  ?>
  <?php
  if(isset($_POST["sub"])){
  $mq = "SELECT * FROM user_register where id=$id";
  $msq = mysqli_query($con, $mq);
  if ($r = mysqli_fetch_row($msq)) {
    $email=$r[4];
    $name=$r[1];
  sendmail($name,$email);}

    }
   
    
  
  
  ?>
  
</body>

</html>