<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        form {
            background-color: rgb(36, 170, 135);
            padding-top: 100px;
            padding-bottom: 100px;
        }

        body {
            background-color: rgb(203, 136, 35);
        }
    </style>
    <script>
        function usr() {
            var user = document.forms["register"]["name"].value;
            if (user == "") {
                alert("Please enter a valid name");
                return false;
            }
            var phone = document.forms["register"]["phone"].value;
            if (phone == "") {
                alert("Please enter the phone number");
                return false;
            }
            var password = document.forms["register"]["pass"].value;
            if (password == "") {
                alert("Please enter the password");
                return false;
            }
            if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <img src="book.jpg" alt="Image" width="100%" height="65%" class="img-circle">
            </div>
            <div class="col-lg-6">
                <form name="register" method="post" onsubmit="return usr()">
                    <h3>
                        <center>USER REGISTRATION</center>
                    </h3>
                    <div class="login">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="login">
                        <label for="date" class="form-label">DOB</label>
                        <input type="date" class="form-control" name="date" id="date">
                    </div>
                    <div class="login">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="login">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    
                    <div class="gender">
                        <h6>Gender</h6>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male" class="form-label">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female" class="form-label">Female</label>
                    </div>
                    <div class="d-grid">
                        <input type="submit" name="sub" class="btn btn-primary" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registeration";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn) {

        if (isset($_POST["sub"])) {
            $name = $_POST["name"];
            $date = $_POST["date"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $gender = $_POST["gender"];
            $status ="New";
            $sql = "INSERT INTO user_register (name, DOB, phone_number, email, password, gender,status) 
            VALUES ('$name', '$date', '$phone', '$email', '$pass', '$gender','$status')";
            $sq = mysqli_query($conn, $sql);
            echo
            "<script>
            alert('Information added successfully');
            </script>";
        }
    }


    ?>
</body>

</html>