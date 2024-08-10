<?php
session_start();
$id=$_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Dashboard</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: lightblue;
        }
        .welcome-message {
            color: #007bff;
            text-align: center;
            margin-top: 20px;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            color: black;
            text-align: center;
            background-color: white;
        }

        .sidebar {
            height: 100vh;
            position: relative;
            background-color: white;
            
            padding-top: 20px;
        }

        .profile-card {
            padding-top: 40px;
            background-color: doubleval;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
       
        .profile-card h4 {
            color: #007bff;
        }

        .sidebar .nav-link:hover {
            background-color: grey;
        } 
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
        <div class="sidebar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light
            ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="edit"></span>
                                Answer Questions
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="list"></span>
                                My Answers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="trending-up"></span>
                                Top Order Questions
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="user"></span>
                                View Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="lock"></span>
                                Reset Password
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="mainContent">
                
                <!-- Main content goes here -->
                <h1>Welcome to the specialist Dashboard</h1>
               

    
   
    
  
  
  

            </main>
            
       


            
        
            
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 ASK THE EXPERTS</p>
    </footer>

    <script>
        $(document).ready(function() {
            $('.navbar-toggler').click(function() {
                $('#sidebar').toggleClass('collapse');
            });
        });
    </script>
    <?php
  
  $mq = "SELECT * FROM user_register where status=approved";
  $msq = mysqli_query($con, $mq);
  if ($r = mysqli_fetch_row($msq)) {
    
    $name=$r[2];
    
 
 echo "
 <script>
 Hi! '$name' this is your dashboard, here you can able to make a interaction among the user error

</script>"
}

    
   
    
  
  
  ?>
</body>

</html>