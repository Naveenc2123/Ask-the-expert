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
            background-color: aquamarine;
            padding-top: 5px;
        }

        .footer {
            position: relative;
            bottom: 0;
            width: 100%;
            color: black;
            text-align: center;
        }

        .sidebar {
            height: 100vh;
            position: relative;
            background-color: white;
            
            padding-top: 20px;
        }

        /* .sidebar .nav-link {
            color: black;
        }

        .sidebar .nav-link.active {
            background-color: yellow;
        }*/

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
                        <li class="nav-item active">
                            <a class="nav-link active" href="#">
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manageuser.php">
                                User Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="managesp.php">
                                Specialist Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Reports
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


            
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="mainContent">
                
                <!-- Main content goes here -->
                <h1>Welcome to the Administrator Dashboard</h1>
                <p>Here you can manage users, specialists, and view reports.</p>
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
</body>

</html>