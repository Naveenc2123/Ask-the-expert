<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASK THE EXPERTS</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
            padding-top: 56px;
        }
        header {
            top: 0;
            position: fixed;
            width: 100%;
            z-index: 1030;
        }
        .footer {
            position: relative;
            bottom: 0;
            width: 100%;
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .form-inline {
            padding-left: 100px;
        }
        .carousel-inner img {
            height: 520px;
            object-fit: cover;
        }
        .question-card {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .card-title {
            font-weight: bold;
            color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .navbar-nav .nav-link {
            font-weight: bold;
            color: #007bff;
        }
        .navbar-nav .nav-link:hover {
            color: #0056b3;
        }
        .navbar-nav .dropdown-menu a {
            color: #343a40;
        }
        .navbar-nav .dropdown-menu a:hover {
            background-color: #f8f9fa;
        }
        .footer a {
            color: #f8f9fa;
            margin: 0 10px;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Topics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                </ul>
                <h2 class="mx-auto">ASK THE EXPERTS!</h2> 
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            REGISTER
                        </a>
                        <div class="dropdown-menu">
                            
                            <a class="dropdown-item" href="./userlogin.php">User</a>
                            <a class="dropdown-item" href="./splogin.php">Specialist</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            LOGIN
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./adminlogin.php">Admin</a>
                            <a class="dropdown-item" href="./userlogin.php">User</a>
                            <a class="dropdown-item" href="./splogin.php">Specialist</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <div class="container-fluid">
        <div class="col-lg">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./apple-1853259.jpg" class="d-block w-100" alt="Apple Image">
                    </div>
                    <div class="carousel-item">
                        <img src="./backhome.jpg" class="d-block w-100" alt="Back Home Image">
                    </div>
                    <div class="carousel-item">
                        <img src="./study-1968077.jpg" class="d-block w-100" alt="Study Image">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
<br>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card question-card">
                    <div class="card-body">
                        <h5 class="card-title">What is the future of AI?</h5>
                        <p class="card-text"><strong>Expert Reply:</strong> The future of AI is poised to revolutionize numerous fields. Advances in machine learning ...
                       <br> <a href="det.php" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
                <br>
                <div class="card question-card">
                    <div class="card-body">
                        <h5 class="card-title">How to stay healthy?</h5>
                        <p class="card-text"><strong>Expert Reply:</strong> Staying healthy involves a balanced combination of a nutritious diet and regular physical activity. ...
                        <br><a href="details.php" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Optional content for the right column -->
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <footer class="footer">
            <div class="container">
                <span class="text-muted">© 2024 ASK THE EXPERTS App</span>
                <div class="mt-2">
                    <a href="#" class="text-muted">Contact Us</a> |
                    <a href="#" class="text-muted">Privacy Policy</a> |
                    <a href="#" class="text-muted">Terms of Service</a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
