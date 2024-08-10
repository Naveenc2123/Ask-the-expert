<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ask the Expert</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    body {
      background-color: #f0f8ff;
      font-family: 'Arial', sans-serif;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-box {
      background: #ffffff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    }

    .login-box h3 {
      margin-bottom: 30px;
      font-weight: 600;
      color: #333;
    }

    .form-label {
      font-weight: 600;
    }

    .form-control {
      border-radius: 5px;
    }

    .btn {
      width: 100%;
      padding: 10px;
      background-color: #5cb85c;
      border: none;
      border-radius: 5px;
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #4cae4c;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .text-center {
      text-align: center;
    }
  </style>
  <script>
    function usr() {
      var user = document.forms["login"]["name"].value;
      var password = document.forms["login"]["password"].value;
      if (user === "") {
        window.alert("Please enter a valid name.");
        return false;
      }
      if (password === "") {
        window.alert("Please enter the password.");
        return false;
      }
      if (user === "naveen" && password === "na2123") {
        return true;
      } else {
        window.alert("Please enter a valid ID or password.");
        return false;
      }
    }
  </script>
</head>

<body>
  <div class="container">
    <div class="login-box">
      <form name="login" action="admindash.php" onsubmit="return usr()" method="post">
        <h3 class="text-center">Admin Login</h3>
        <div class="form-group">
          <label for="name" class="form-label">Admin ID</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn">Confirm</button>
      </form>
    </div>
  </div>
</body>

</html>
